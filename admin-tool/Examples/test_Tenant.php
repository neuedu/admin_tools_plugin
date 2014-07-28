<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Tenant;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$domain = "zhili" . rand(0,1000) .  ".epals.com";

$tenant = new Tenant();
$tenant->set_SIS_Server($ini['sis_apiserver']['url']);
$tenant->setDomain($domain);
$tenant->setEmailDomain("mail.$domain");
$tenant->setPublished('false');
$tenant->setName("Global Community Tenant for $domain");
$tenant->add();
$tenantID = $tenant->getId();

print("Tenant($tenantID) created successfully!\n");


$tenant_1 = new Tenant();
$tenant_1->set_SIS_Server($ini['sis_apiserver']['url']);
$tenant_1->loadTenant($domain);
$EmailDomain = $tenant_1->getEmailDomain();
print("Tenant($tenantID)'s email Domain is $EmailDomain!\n");




