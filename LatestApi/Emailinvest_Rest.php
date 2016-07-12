<?php
/**
 * Rest API 
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
 * @version 2.00
 * @link https://github.com/NEVUP-LTD/emailinvest-api 
 * @copyright (c) 2015
 * @package Emailinvest
 * @subpackage API
 */

if (!function_exists('curl_init')) {
    die('Email Invest needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    die('Email Invest needs the JSON PHP extension.');
}

class emailinvest
{

    var $host = "app1.emailinvest.com/api";
    var $screen = "xml";

    function __construct($api_key = null, $api_username = null, $ssl = false)
    {
        $this->ApiKey = $api_key;
        $this->ApiUsername = $api_username;
        $this->ssl = $ssl;
    }

    private function send($post, $action)
    {
        $postdata = "";
        $post["ip"] = $_SERVER["SERVER_ADDR"];
        $post["key"] = $this->ApiKey;
        $post["username"] = $this->ApiUsername;
        $post["screen"] = $this->screen;
        $this->ErrorMessage = "";

        foreach ($post as $k => $v) {
            $postdata .= '&' . $k . '=' . rawurlencode($this->utf($v));
        }
        $url = $this->useSecure($this->ssl) . $this->host . "/" . $action;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); // set url to post to
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/x-www-form-urlencoded; charset=utf-8"
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $this->Result = curl_exec($ch);              
        
    
        if (curl_errno($ch)) {
            $this->Error = curl_error($ch);
            return false;
        } else
            return true;
    }

    private function screen($result)
    {
        if (!$result)
            return $this->Error;
        $result = $this->Result;
        if ($this->screen == 'array')
            $result = json_decode($result, true);
        return $result;
    }

    function useSecure($val)
    {
        return ($val) ? "https://" : "http://";
    }

    function utf($v)
    {
        if (!$this->utf8)
            $v = utf8_encode($v);
        return $v;
    }

//////////////////////////
    function ping()
    {
        $params = array();
        return $this->screen($this->send($params, "ping"));
    }

    function contactsadd($email, $list_id, $fields = false)
    {
        $params = array();
        $params["email"] = $email;
        if (!is_array($fields))
            $fields = array();

        foreach ($fields as $key => $value) {
            $params[$key] = $value;
        }
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "contactsadd"));
    }

    function contactsdelete($email, $list_id)
    {
        $params = array();
        $params["email"] = $email;
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "contactsdelete"));
    }

    function contactsunsubscribe($email, $list_id = false)
    {
        $params = array();
        $params["email"] = $email;
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "contactsunsubscribe"));
    }

    function contactsgetcontact($email)
    {
        $params = array();
        $params["email"] = $email;
        return $this->screen($this->send($params, "contactsgetcontact"));
    }

    function contactsgetlist($list_id, $field = false, $page = false, $number_for_page = false, $from_date = false, $to_date = false, $order_by = "email")
    {
        $params = array();
        $params["list_id"] = $list_id;
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["from_date"] = $from_date;
        $params["to_date"] = $to_date;
        $params["order_by"] = $order_by;
        return $this->screen($this->send($params, "contactsgetlist"));
    }

    function contactsgetunsubscribed($list_id, $field = false, $page = false, $number_for_page = false, $from_date = false, $to_date = false, $order_by = "email")
    {
        $params = array();
        $params["list_id"] = $list_id;
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["from_date"] = $from_date;
        $params["to_date"] = $to_date;
        $params["order_by"] = $order_by;
        return $this->screen($this->send($params, "contactsgetunsubscribed"));
    }

    function contactsgetdeleted($field = false, $page = false, $number_for_page = false, $order_by = "email")
    {
        $params = array();
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["order_by"] = $order_by;
        return $this->screen($this->send($params, "contactsgetdeleted"));
    }

    function contactsgetbounced($field = false, $page = false, $number_for_page = false, $order_by = "email")
    {
        $params = array();
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["order_by"] = $order_by;
        return $this->screen($this->send($params, "contactsgetbounced"));
    }

    function groupsadd($name)
    {
        $params = array();
        $params["name"] = $name;
        return $this->screen($this->send($params, "groupsadd"));
    }

    function groupsupdate($list_id, $name)
    {
        $params = array();
        $params["list_id"] = $list_id;
        $params["name"] = $name;
        return $this->screen($this->send($params, "groupsupdate"));
    }

    function groupsdelete($list_id)
    {
        $params = array();
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "groupsdelete"));
    }

    function groupsgetlist()
    {
        $params = array();
        return $this->screen($this->send($params, "groupsgetlist"));
    }

    function groupsempty($list_id)
    {
        $params = array();
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "groupsempty"));
    }

    function fieldsadd($code, $name, $type = "VARCHAR")
    {
        $params = array();
        $params["name"] = $name;
        $params["code"] = $code;
        $params["type"] = $type;
        return $this->screen($this->send($params, "fieldsadd"));
    }

    function fieldsupdate($code, $name)
    {
        $params = array();
        $params["code"] = $code;
        $params["name"] = $name;
        return $this->screen($this->send($params, "fieldsupdate"));
    }

    function fieldsdelete($code)
    {
        $params = array();
        $params["code"] = $code;
        return $this->screen($this->send($params, "fieldsdelete"));
    }

    function fieldsgetlist()
    {
        $params = array();
        return $this->screen($this->send($params, "fieldsgetlist"));
    }

    function fromsgetlist()
    {
        $params = array();
        return $this->screen($this->send($params, "fromsgetlist"));
    }

    function fromsadd($email, $name = false)
    {
        $params = array();
        if (!$name)
            $name = $email;
        $params["email"] = $email;
        $params["name"] = $name;
        return $this->screen($this->send($params, "fromsadd"));
    }

    function fromsdelete($email)
    {
        $params = array();
        $params["email"] = $email;
        return $this->screen($this->send($params, "fromsdelete"));
    }

    function validate($emails)
    {
        $params = array();
        $params["emails"] = $emails;
        return $this->screen($this->send($params, "validate"));
    }

    function campaignsend($subject, $message, $from_id, $list_id, $tpl_id = false, $date_start = false, $type = "html")
    {
        $params = array();
        $params["subject"] = $subject;
        $params["message"] = $message;
        $params["from_id"] = $from_id;
        $params["list_id"] = $list_id;
        $params["tpl_id"] = $tpl_id;
        $params["date_start"] = $date_start;
        $params["type"] = $type;
        return $this->screen($this->send($params, "campaignsend"));
    }

}

?>