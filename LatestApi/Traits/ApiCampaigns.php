<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Api;

/**
 * Functions for Campaigns
 */
trait ApiCampaigns
{

    /**
     * Get From emails list from your profile
     */
    public function fromsgetlist()
    {
        $params = array();
        /**
         * @return Array Status Code and array with all from emails
         */
        return $this->Screen($this->Send($params, "fromsgetlist"));
    }

    /**
     * Add From Email to your profile
     * @param string $email From Email
     * @param string  $name Display Name
     */
    public function fromsadd($email, $name = false)
    {
        $params = array();
        if (!$name) {
            $name = $email;
        }
        $params["email"] = $email;
        $params["name"] = $name;
        return $this->Screen($this->Send($params, "fromsadd"));
    }

    /**
     * Use to send campaigns from your profile
     * 
     * @param array $data Campaign structore
     * @param array $recipients Recipients and filters
     * @param array $options Settings for campaign
     * @return array
     */
    public function campaignsend($data, $recipients, $options)
    {
        $params = array();
        $params["data"] = json_encode($data);
        $params["recipients"] = json_encode($recipients);
        $params["options"] = json_encode($options);
        return $this->Screen($this->Send($params, "campaignSend"));
    }

}
