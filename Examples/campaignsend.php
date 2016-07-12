<?php

/*
 * Copyright (C) 2015 emailinvest-app1.
 * 
 * This file is part of emailinvest-app1.
 * emailinvest-app1 can not be copied and/or distributed without the express
 * permission of emailinvest-app1.
 */

include ("LatestApi/Emailinvest.php");

use Api;

$ei = new Api\Emailinvest("da39a3ee5e6b4b0d3255bfef95601890afd80709", "ifkooo", true);
$ei->screen = "array"; // - option for php array
$ei->host = "app1.emailinvest.com/api";

/**
 * Campaign structore
 * 
 * You can use remote html with file_get_contents("https://www.google.com/");
 * 
 * For date, you can use FALSE to send now, or valid date format to shedule your campaign
 * 
 * @var array $data
 */
$data["from_id"] = 1753;
$data["subject"] = "Нова Тестова кампания от API";
$data["message"] = "Примерен <h1>HTML</h1> текст"; // 
$data["date"] = "02.02.2016";

/**
 * Recipients and filters
 * 
 * For filter condition, you can use 'any' or 'all' 
 * 
 * @var array $data
 */
$recipients["groups"][] = 9369;
$recipients["filters"]["use"] = "any";
$recipients["filters"]["list"][] = 77;

/**
 * Settings for campaign
 * 
 * All setigns are false by default.
 * 
 * @var array $data
 */
$options["track"] = true;
$options["ga"] = "Test GA";
$options["inform"]["begin"] = true;
$options["inform"]["end"] = true;

$result = $ei->campaignsend($data, $recipients, $options);

echo $result["code"] == 1 ? "CampaignID: " . $result["data"] : "ERROR: " . $result["text"];
