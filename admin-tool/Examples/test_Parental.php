<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Tenant;
use \ePals\Parental;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$randid = rand(0,1000);
$domain = "zhili" . $randid .  ".epals.com";

$tenant = new Tenant();
$tenant->set_SIS_Server($ini['sis_apiserver']['url']);
$tenant->setDomain($domain);
$tenant->setEmailDomain("mail.$domain");
$tenant->setPublished('false');
$tenant->setName("Global Community Tenant for $domain");
$tenant->add();
$tenantID = $tenant->getId();

print ("Tenant($domain) created successfully!\n");

$parentccount = "zhili" . $randid;
$parent = new Parental();
$parent->set_SIS_Server($ini['sis_apiserver']['url']);

$parent->setAccount("$parentccount@$domain");
$parent->setEPalsEmail("$parentccount@mail.$domain");
$parent->setExternalEmail("$parentccount@mac.com");
$parent->setUserId("2_810_1_1_$randid");
$parent->setFirstName("Zhili");
$parent->setLastName("Hua");
$parent->setPassword("Password123");
$parent->add();

print("Parent($parentccount@$domain) created successfully!\n");