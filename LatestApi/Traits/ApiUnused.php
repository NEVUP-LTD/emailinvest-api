<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Api;

trait ApiUnused
{

    public function contactsdelete($email, $list_id)
    {
        $params = array();
        $params["email"] = $email;
        $params["list_id"] = $list_id;
        return $this->Screen($this->Send($params, "contactsdelete"));
    }

    public function contactsunsubscribe($email, $list_id = false)
    {
        $params = array();
        $params["email"] = $email;
        $params["list_id"] = $list_id;
        return $this->Screen($this->Send($params, "contactsunsubscribe"));
    }

    public function contactsgetcontact($email)
    {
        $params = array();
        $params["email"] = $email;
        return $this->Screen($this->Send($params, "contactsgetcontact"));
    }

    public function contactsgetlist($list_id, $filter, $field = false)
    {
        // Change to filter!
        $page = $filter["page"];
        $number_for_page = $filter["number_for_page"];
        $from_date = $filter["from_date"];
        $to_date = $filter["to_date"];
        $order_by = $filter["to_date"] ? $filter["to_date"] : "email";

        $params = array();
        $params["list_id"] = $list_id;
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["from_date"] = $from_date;
        $params["to_date"] = $to_date;
        $params["order_by"] = $order_by;
        return $this->Screen($this->Send($params, "contactsgetlist"));
    }

    public function contactsgetunsubscribed($list_id, $filter, $field = false)
    {
        // Change to filter!
        $page = $filter["page"];
        $number_for_page = $filter["number_for_page"];
        $from_date = $filter["from_date"];
        $to_date = $filter["to_date"];
        $order_by = $filter["to_date"] ? $filter["to_date"] : "email";

        $params = array();
        $params["list_id"] = $list_id;
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["from_date"] = $from_date;
        $params["to_date"] = $to_date;
        $params["order_by"] = $order_by;
        return $this->Screen($this->Send($params, "contactsgetunsubscribed"));
    }

    public function contactsgetdeleted($field = false, $page = false, $number_for_page = false, $order_by = "email")
    {
        $params = array();
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["order_by"] = $order_by;
        return $this->Screen($this->Send($params, "contactsgetdeleted"));
    }

    public function contactsgetbounced($field = false, $page = false, $number_for_page = false, $order_by = "email")
    {
        $params = array();
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["order_by"] = $order_by;
        return $this->Screen($this->Send($params, "contactsgetbounced"));
    }

    public function groupsupdate($list_id, $name)
    {
        $params = array();
        $params["list_id"] = $list_id;
        $params["name"] = $name;
        return $this->Screen($this->Send($params, "groupsupdate"));
    }

    public function fieldsupdate($code, $name)
    {
        $params = array();
        $params["code"] = $code;
        $params["name"] = $name;
        return $this->Screen($this->Send($params, "fieldsupdate"));
    }

    public function fromsdelete($email)
    {
        $params = array();
        $params["email"] = $email;
        return $this->Screen($this->Send($params, "fromsdelete"));
    }

  

}
