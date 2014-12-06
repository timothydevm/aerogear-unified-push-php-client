<?php
/**
 * JBoss, Home of Professional Open Source
 * Copyright Red Hat, Inc., and individual contributors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * 	http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
* This file simply demonstrates the basic usage of SenderClient class.
* The data is only hard coded in. For a dynamic data entry, see
* /webapp/index.php.
*/

require("SenderClient.php");


$message = new SenderClient;
$message->setServerURL("http://api.apps.tnetworks.nl/push/"); 
$message->setMasterSecret("MASTERSECRET");
$message->setPushApplicationID("APPID");
$message->addVariant("VARIANT");

$message->addMessage("alert","AEROGEAR PUSH Test PHP..");
$message->addMessage("badge",500);
$message->addMessage("clientIdentifier","PHP Push Api");
$message->addMessage("sound","default");

$message->sendMessage();

$response = $message->getResponseCode();

//Removed Response codes because of cron-job execution logging.
//if($response == 200)
//{
//	echo "The job has been submitted to the server!";
//}
//else
//{
//	echo "The server returned a response code of " . $response;
//}
?>
