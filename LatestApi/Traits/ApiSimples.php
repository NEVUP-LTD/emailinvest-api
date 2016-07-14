<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Api;

/**
 * Simple API functions
 */
trait ApiSimples
{

    /**
     * Test connection
     */
    public function me()
    {
        $params = array();
        return $this->screen($this->send($params, "me"));
    }
}
