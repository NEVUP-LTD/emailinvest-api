<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Api;

/**
 * Functions for Fields and Groups
 */
trait ApiFieldsGroups
{

    /**
     * Add Email lists  to your profile
     * @param string  $name  List Name
     */
    public function groupsadd($name)
    {
        $params = array();
        $params["name"] = $name;
        return $this->Screen($this->Send($params, "groupsadd"));
    }

    /**
     * Get Email lists  from your profile
     */
    public function groupsgetlist()
    {
        $params = array();
        return $this->Screen($this->Send($params, "groupsgetlist"));
    }

    /**
     * Delete Email lists  to your profile
     * @param int  $list_id  List ID
     */
    public function groupsdelete($list_id)
    {
        $params = array();
        $params["list_id"] = $list_id;
        return $this->Screen($this->Send($params, "groupsdelete"));
    }

    /**
     * Delete all contacts from Email lists 
     * @param int  $list_id  List ID
     */
    public function groupsempty($list_id)
    {
        $params = array();
        $params["list_id"] = $list_id;
        return $this->Screen($this->Send($params, "groupsempty"));
    }

    /**
     * Add Fields to your profile
     * @param string  $code Field's code
     * @param string  $name Field's name
     * @param string  $type Field's type (Varchar, Int, Date)
     */
    public function fieldsadd($code, $name, $type = "VARCHAR")
    {
        $params = array();
        $params["name"] = $name;
        $params["code"] = $code;
        $params["type"] = $type;
        return $this->Screen($this->Send($params, "fieldsadd"));
    }

    /**
     * Delete Fields from your profile
     * @param string  $code Field's code
     */
    public function fieldsdelete($code)
    {
        $params = array();
        $params["code"] = $code;
        return $this->Screen($this->Send($params, "fieldsdelete"));
    }

    /**
     * Get Fields list from your profile
     */
    public function fieldsgetlist()
    {
        $params = array();
        return $this->Screen($this->Send($params, "fieldsgetlist"));
    }

}