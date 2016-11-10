<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Functions for Contacts
 */
trait ApiContacts
{

    /**
     * Add Contacts to your profile
     * @param string $Email Email to add
     * @param int $ListID GroupID to add email
     * @param array|bool $Fields Other field for thi emails
     * @param bool|string $Settings create_fields,create_groups,clear_fields,clear_groups
     * @return
     */
    function contactsAdd($Email, $ListID, $Fields = false, $Settings = false)
    {
        $params = array();
        $params["email"] = $Email;
        $params["settings"] = json_encode($Settings);
        if (!is_array($Fields)) {
            $Fields = array();
        }
        foreach ($Fields as $key => $value) {
            $params[$key] = $value;
        }

        $params["list_id"] = json_encode($ListID);
        return $this->screen($this->send($params, "contactsadd"));
    }

    /**
     * Validate Contacts
     * @param string $Email Email to check
     */
    function validate($Email)
    {
        $params = array();
        $params["emails"] = $Email;
        return $this->screen($this->send($params, "validate"));
    }

    /**
     * Update group data
     *
     * @param int $groupId groupId to edit
     * @param string $name New name
     * @return mixed
     */
    public function groupsUpdate($groupId, $name)
    {
        $params = array();
        $params["list_id"] = $groupId;
        $params["name"] = $name;
        return $this->screen($this->send($params, "groupsupdate"));
    }
}
