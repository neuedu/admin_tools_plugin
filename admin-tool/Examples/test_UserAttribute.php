<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Tenant;
use \ePals\Teacher;
use \ePals\UserAttribute;

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
$ua = new UserAttribute();
$ua->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$ua->set_SIS_Server($ini['sis_apiserver']['url']);
$ua->loadUserAttribute($useraccount);
$ua->add("sports", "soccer");
$ua->add("school", "college of William and Mary");
$ua->add("Country", "USA");

print ("Teacher($useraccount) attribute set successfully!\n");


$ua_2 = new UserAttribute();
$ua_2->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$ua_2->set_SIS_Server($ini['sis_apiserver']['url']);
$ua_2->loadUserAttribute($useraccount);
$ret = $ua_2->getAll();
print ("Teacher($useraccount) has below Attribute(s): \n");
foreach($ret as $key=>$value) {
    print("$key: $value\n");
}








