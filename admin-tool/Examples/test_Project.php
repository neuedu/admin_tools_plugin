<?
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Project;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$key_1 = "EnsuringUnderstanding";
$key_2 = "EssentialQuestions";
$key_3 = "CapstoneProject";

$value_1 = "EnsuringUnderstanding";
$value_2 = "EssentialQuestions";
$value_3 = "CapstoneProject";


$projectname = "Zhili Prject 20140320-". rand(1,1000);
$description = "Description for " . $projectname;

$project = new Project();
$project->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$metadata_array = Array($key_1=>$value_1, $key_2=>$value_2, $key_3=>$value_3);
$project->setProjectname($projectname);
$project->setDescription($description);
$project->setMetadata($metadata_array);
$project->add();
$project_id = $project->id;

print("Project($project_id) gets created successfulluy!\n");


$project_3 = new Project();
$project_3->set_ElasticSearch_Server($ini['elasticsearch']['host'] . ":" .  $ini['elasticsearch']['port']);
$project_3->load($project_id);
$newprojectname = $project_3->getProjectname();
$newprojectdescription = $project_3->getDescription();
$metadata = $project_3->getMetadata();

print("\nBasic Data for Project ($$project_id): \n\n");
print("Name: $newprojectname\n");
print("Description: $newprojectdescription\n");

print("\nMeta Data for Project ($$project_id): \n\n");
foreach ($metadata as $key => $value) {
    print("$key: $value \n");
}
print("\n");
