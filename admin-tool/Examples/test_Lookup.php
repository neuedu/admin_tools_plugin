<?php
require_once(dirname(dirname(__FILE__)) . "/vendor/autoload.php");

use \ePals\Lookup\CountryLookup;
use \ePals\Lookup\AgeRangeLookup;
use \ePals\Lookup\GradeLookup;
use \ePals\Lookup\RoleLookup;
use \ePals\Lookup\SchoolTypeLookup;

$ini = parse_ini_file(dirname(dirname(__FILE__)) . '/api.ini',TRUE);

$countries = new CountryLookup();
$countries->set_hostname($ini['lookup_apiserver']['url']);
$countries->set_app_id($ini['lookup_apiserver']['app_id']);  
$countries->set_app_key($ini['lookup_apiserver']['app_key']);
        
$countries->load();
$all_countries = $countries->getAllCountries();

echo "getAllCountries:\n" ;
foreach ($all_countries as $country) {
    echo "$country->countryCode : $country->countryName\n";
}
echo "\n\n------\n\n";

$ages = new AgeRangeLookup();
$ages->set_hostname($ini['lookup_apiserver']['url']);
$ages->set_app_id($ini['lookup_apiserver']['app_id']);  
$ages->set_app_key($ini['lookup_apiserver']['app_key']);
$ages->load();

$all_ages = $ages->getAllAgeRanges();
echo "getAllAges:\n" ;
foreach ($all_ages as $age) {
    echo "$age->ageId : $age->ageRange\n";
}
echo "\n\n------\n\n";

$grades = new GradeLookup();
$grades->set_hostname($ini['lookup_apiserver']['url']);
$grades->set_app_id($ini['lookup_apiserver']['app_id']);  
$grades->set_app_key($ini['lookup_apiserver']['app_key']);
$grades->load();

$all_grades = $grades->getAllGrades();
echo "getAllGrades:\n" ;
foreach ($all_grades as $grade) {
    echo "$grade->gradeId : $grade->gradeName\n";
}
echo "\n\n------\n\n";

$roles = new RoleLookup();
$roles->set_hostname($ini['lookup_apiserver']['url']);
$roles->set_app_id($ini['lookup_apiserver']['app_id']);  
$roles->set_app_key($ini['lookup_apiserver']['app_key']);
$roles->load();

$all_roles = $roles->getAllRoles();
echo "getAllRoles:\n" ;
foreach ($all_roles as $role) {
    echo "$role->roleId : $role->roleName\n";
}
echo "\n\n------\n\n";

$schooltypes = new SchoolTypeLookup();
$schooltypes->set_hostname($ini['lookup_apiserver']['url']);
$schooltypes->set_app_id($ini['lookup_apiserver']['app_id']);  
$schooltypes->set_app_key($ini['lookup_apiserver']['app_key']);
$schooltypes->load();

$all_schooltypes = $schooltypes->getAllSchoolTypes();
echo "getAllSchoolTypes:\n" ;
foreach ($all_schooltypes as $schooltype) {
    echo "$schooltype->schoolTypeId : $schooltype->schoolTypeId\n";
}
echo "\n\n------\n\n";


