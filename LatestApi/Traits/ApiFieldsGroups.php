<?php
/**
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
    public function groupsAdd($name)
    {
        $params = array();
        $params["name"] = $name;
        return $this->screen($this->send($params, "groupsadd"));
    }

    /**
     * Get Email lists  from your profile
     */
    public function groupsGetList()
    {
        $params = array();
        return $this->screen($this->send($params, "groupsgetlist"));
    }

    /**
     * Delete Email lists  to your profile
     * @param int  $list_id  List ID
     */
    public function groupsDelete($list_id)
    {
        $params = array();
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "groupsdelete"));
    }

    /**
     * Delete all contacts from Email lists
     * @param int  $list_id  List ID
     */
    public function groupsEmpty($list_id)
    {
        $params = array();
        $params["list_id"] = $list_id;
        return $this->screen($this->send($params, "groupsempty"));
    }

    /**
     * Add Fields to your profile
     * @param string  $code Field's code
     * @param string  $name Field's name
     * @param string  $type Field's type (Varchar, Int, Date)
     */
    public function fieldsAdd($code, $name, $type = "VARCHAR")
    {
        $params = array();
        $params["name"] = $name;
        $params["code"] = $code;
        $params["type"] = $type;
        return $this->screen($this->send($params, "fieldsadd"));
    }

    /**
     * Delete Fields from your profile
     * @param string  $code Field's code
     */
    public function fieldsDelete($code)
    {
        $params = array();
        $params["code"] = $code;
        return $this->screen($this->send($params, "fieldsdelete"));
    }

    /**
     * Get Fields list from your profile
     */
    public function fieldsGetList()
    {
        $params = array();
        return $this->screen($this->send($params, "fieldsgetlist"));
    }
}
