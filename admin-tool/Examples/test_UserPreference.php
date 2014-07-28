<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Tenant;
use \ePals\Teacher;
use \ePals\UserPreference;

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

$teacheraccount = "zhili" . $randid;
$teacher = new Teacher();
$teacher->set_SIS_Server($ini['sis_apiserver']['url']);

$teacher->setAccount("$teacheraccount@$domain");
$teacher->setEPalsEmail("$teacheraccount@mail.$domain");
$teacher->setExternalEmail("$teacheraccount@mac.com");
$teacher->setUserId("2_810_1_1_$randid");
$teacher->setFirstName("Zhili");
$teacher->setLastName("Hua");
$teacher->setPassword("Password123");
$teacher->add();

print("Teacher($teacheraccount@$domain) created successfully!\n");

$useraccount =  $teacheraccount . "@" . $domain;
$up = new UserPreference();
$up->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$up->set_SIS_Server($ini['sis_apiserver']['url']);
$up->loadUserPreference($useraccount);
$up->add("sports", "soccer");
$up->add("school", "college of William and Mary");
$up->add("Country", "USA");

print ("Teacher($useraccount) preference set successfully!\n");


$up_2 = new UserPreference();
$up_2->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$up_2->set_SIS_Server($ini['sis_apiserver']['url']);
$up_2->loadUserPreference($useraccount);
$ret = $up_2->getAll();
print ("Teacher($useraccount) has below Preference(s): \n");
foreach($ret as $key=>$value) {
    print("$key: $value\n");
}








