<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Assignment;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$a = new Assignment();
$a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$a->setName('Random Assignment ' . Rand(0,1000));
$a->setDescription('Random Description' . Rand(0,1000));
$a->setStartDate('01/01/2014');
$a->setEndDate('01/01/2014');
$a->setProject(1);
$a->setGroupID(1);
$a->add();
$elasticsearchid = $a->id;
print ("Assignment($elasticsearchid) is created successfully!\n");

//$elasticsearchid = 'bf792e99-3bb3-4dc3-abea-dab184598f1c';
$a_2 = new Assignment();
$a_2->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$a_2->load($elasticsearchid);

$name = $a_2->getName();
$description = $a_2->getDescription();
$startdate = $a_2->getStartDate();
$enddate = $a_2->getEndDate();
$groupID = $a_2->getGroupID();
$projectID = $a_2->getProject();
if(!empty($name)) {
    print ("Load Assignment($elasticsearchid) successfully!\n");
    print("Name: $name \n");
    print("Description: $description \n");
    print("StartDate: $startdate \n");
    print("EndDate: $enddate \n");
    print("groupID: $groupID\n");
    print("projectID: $projectID\n");
}
else {
    print ("Load Assignment($elasticsearchid) failed!\n");
}