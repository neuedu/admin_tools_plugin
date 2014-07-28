<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Tenant;
use \ePals\Student;

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

$studentccount = "zhili" . $randid;
$student = new Student();
$student->set_SIS_Server($ini['sis_apiserver']['url']);

$student->setAccount("$studentccount@$domain");
$student->setEPalsEmail("$studentccount@mail.$domain");
$student->setExternalEmail("$studentccount@mac.com");
$student->setUserId("2_810_1_1_$randid");
$student->setFirstName("Zhili");
$student->setLastName("Hua");
$student->setPassword("Password123");
$student->add();

print("Student($studentccount@$domain) created successfully!\n");