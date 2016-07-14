<?php

/**
 * Oficial emailinvest api file
 *
 * RESULTS
 * Array (
 * [error] => 0  - ALL IS OK
 * [code] => 1 - ERROR CODE (1- ALl IS OK)
 * [text] =>"It's OK" - Friendly message
 * data] => Array ( )  Result from function
 *
 *
 * @author Emailinvest <support@emailinvest.com>
 * @version 2.01
 * @link https://github.com/NEVUP-LTD/emailinvest-api
 * @copyright (c) 2016
 * @package Emailinvest
 * @subpackage API
 */

namespace Api;

/*
 *  Include Traits only for PHP > 5.4
 */
require_once(__DIR__ . "/Traits/ApiSimples.php");
require_once(__DIR__ . "/Traits/ApiContacts.php");
require_once(__DIR__ . "/Traits/ApiFieldsGroups.php");
require_once(__DIR__ . "/Traits/ApiCampaigns.php");
require_once(__DIR__ . "/Traits/ApiUnused.php");

/**
 * Public API to access your emailinvest account
 *
 * @author ifkooo
 */
class Emailinvest
{

    use ApiSimples,
        ApiContacts,
        ApiFieldsGroups,
        ApiCampaigns,
        ApiUnused;

    /**
     * Use SSL to connect
     *
     * @var Bol $SSL
     */
    public $SSL;

    /**
     * Your emailinvest username
     *
     * @var String $ApiUsername
     */
    public $ApiUsername;

    /**
     * Your secret key
     *
     * @var String $ApiKey
     */
    public $ApiKey;

    /**
     * End point application server
     *
     * @var String $Host
     */
    public $Host = "app1.emailinvest.com/api";

    /**
     *  Returned result's format
     *
     * @var String $Screen
     */
    public $Screen = "array";

    public function __construct($ApiKey = null, $ApiUsername = null, $SSL = false)
    {
        /**
         * Check for compatibility
         * PHP 5.4>
         * CURL
         * JSON
         */
        if (version_compare(phpversion(), '5.4.0', '<')) {
            die("PHP version isn't high enough. Minimal required: 5.4.0. Try REST API");
        }
        if (!function_exists('curl_init')) {
            die('Email Invest needs the CURL PHP extension.');
        }
        if (!function_exists('json_decode')) {
            die('Email Invest needs the JSON PHP extension.');
        }

        $this->Apikey = $ApiKey;
        $this->ApiUsername = $ApiUsername;
        $this->SSL = $SSL;
    }

    /**
     * Communicate with app
     * @param array  $post Variable for current action
     * @param string $action Current action
     */
    public function send($post, $action)
    {
        $postdata = "";
        $post["ip"] = filter_input(INPUT_SERVER, 'SERVER_ADDR');
        $post["key"] = $this->Apikey;
        $post["username"] = $this->ApiUsername;
        $post["Screen"] = $this->Screen;
        $this->ErrorMessage = "";

        foreach ($post as $k => $v) {
            $postdata .= '&' . $k . '=' . rawurlencode(($v));
        }


        $url = $this->useSecure($this->SSL) . $this->Host . "/" . $action;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $this->Result = curl_exec($ch);
        $this->Error = curl_error($ch);
        return $this->Error ? false : true;
    }

    /**
     * Preparate results from app
     * @param array  $ResultFromHost Result from app
     */
    public function screen($ResultFromHost)
    {

        if ($this->Screen == 'array') {
            $this->Result = json_decode($this->Result, true);
        }

        return $ResultFromHost ? $this->Result : $this->Error;
    }

    /**
     * Check for secure connection usage
     * @param bol  $val Use Secure Connection
     */
    private function useSecure($val)
    {
        return ($val) ? "https://" : "http://";
    }

}
