<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Functions for Campaigns
 */
trait ApiCampaigns
{

    /**
     * Get From emails list from your profile
     */
    public function fromsGetList()
    {
        $params = array();

        return $this->screen($this->send($params, "fromsgetlist"));
    }

    /**
     * Add From Email to your profile
     * @param string $email From Email
     * @param bool|string $name Display Name
     * @return
     */
    public function fromsAdd($email, $name = false)
    {
        $params = array();
        if (!$name) {
            $name = $email;
        }
        $params["email"] = $email;
        $params["name"] = $name;
        return $this->screen($this->send($params, "fromsadd"));
    }

    /**
     * Use to send campaigns from your profile
     *
     * @param array $data Campaign structure
     * @param array $recipients Recipients and filters
     * @param array $options Settings for campaign
     * @return array
     */
    public function campaignSend($data, $recipients, $options)
    {
        $params = array();
        $params["data"] = json_encode($data);
        $params["recipients"] = json_encode($recipients);
        $params["options"] = json_encode($options);
        return $this->screen($this->send($params, "campaignSend"));
    }

    /**
     * Get Statistics for campaign
     *
     * @param int $campId Campaign ID
     * @param array $options Options for extracted statistics
     * @return array Statistics
     */
    public function getStats($campId, $options = [])
    {
        $params = [];
        $params["campId"] = $campId;
        $params["options"] = json_encode($options);
        return $this->screen($this->send($params, "campaignStats"));
    }

}
