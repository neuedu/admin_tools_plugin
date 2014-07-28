<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Community;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$name = "Zhili's Community";
$name = $name . rand(0, 1000);

$community = new Community();
$community->set_SIS_Server($ini['sis_apiserver']['url']);
$community->setName($name);
$community->setDescription("Community description");
$community->setSsorealm("http://test.epals.com/sso/");
$community->add();
$ID = $community->getId();
print("The Community($name) has been created successfully!!\n");


$community_1 =  new Community();
$community_1->set_SIS_Server($ini['sis_apiserver']['url']);
$community_1->loadCommunityById($ID);
$communitu_1_name = $community_1->getName();
print ("Community($ID) name is $communitu_1_name \n");

$community_1->setName("Yamin's Community" . rand(0, 1000));
$community_1->update();


$community_2 =  new Community();
$community_2->set_SIS_Server($ini['sis_apiserver']['url']);
$community_2->loadCommunityById($ID);
$communitu_2_name = $community_2->getName();
print ("Community($ID) name is $communitu_2_name \n");










