<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Activity;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$a = new Activity();
$a->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$a->setName('Random Activity ' . Rand(0,1000));
$a->setDescription('Random Description' . Rand(0,1000));
$a->setTool("file");
$a->setAssignmentId(123);
$a->add();
$elasticsearchid = $a->id;
print ("Activity($elasticsearchid) is created successfully!\n");

$a_2 = new Activity();
$a_2->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$a_2->load($elasticsearchid);

$name = $a_2->getName();
$description = $a_2->getDescription();
$tool = $a_2->getTool();
$assignmentID = $a_2->getAssignmentID();
if(!empty($name)) {
    print ("Load Activity($elasticsearchid) successfully!\n");
    print("Name: $name \n");
    print("Description: $description \n");
    print("Tool: $tool \n");
    print("AssignmentID: $assignmentID \n");
    print("elasticsearchID: $elasticsearchid\n");
}
else {
    print ("Load Activity($elasticsearchid) failed!\n");
}


