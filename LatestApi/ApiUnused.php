<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


trait ApiUnused
{

    public function contactsDelete($email, $list_id)
    {
        $params = array();
        $params["email"] = $email;
        $params["list_id"] = $list_id;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsdelete"));
    }

    public function contactsUnsubscribe($email, $list_id = false)
    {
        $params = array();
        $params["email"] = $email;
        $params["list_id"] = $list_id;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsunsubscribe"));
    }

    public function contactsGetContact($email)
    {
        $params = array();
        $params["email"] = $email;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsgetcontact"));
    }

    public function contactsGetList($list_id, $filter, $field = false)
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
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsgetlist"));
    }

    public function contactsGetUnsubscribed($list_id, $filter, $field = false)
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
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsgetunsubscribed"));
    }

    public function contactsGetDeleted($field = false, $page = false, $number_for_page = false, $order_by = "email")
    {
        $params = array();
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["order_by"] = $order_by;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsgetdeleted"));
    }

    public function contactsGetBounced($field = false, $page = false, $number_for_page = false, $order_by = "email")
    {
        $params = array();
        $params["field"] = $field;
        $params["page"] = $page;
        $params["number_for_page"] = $number_for_page;
        $params["order_by"] = $order_by;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "contactsgetbounced"));
    }

    public function fieldsUpdate($code, $name)
    {
        $params = array();
        $params["code"] = $code;
        $params["name"] = $name;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "fieldsupdate"));
    }

    public function fromsDelete($email)
    {
        $params = array();
        $params["email"] = $email;
        /** @noinspection PhpUndefinedMethodInspection */
        /** @noinspection PhpUndefinedMethodInspection */
        return $this->screen($this->send($params, "fromsdelete"));
    }
}
