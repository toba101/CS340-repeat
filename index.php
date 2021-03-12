<?php
//This is the main controller

// Get the database connection file
require_once './library/connections.php';
// Get the PHP Motors model for use as needed
require_once './model/main-model.php';
// Get the functions library
require_once './library/functions.php';


// Get the array of classifications
$classifications = getClassifications();

// var_dump($classifications);
//   exit;

$navList = navList($classifications);
// // Build a navigation bar using the $classifications array
// $navList = '<ul>';
// $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
// foreach ($classifications as $classification) {
//  $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])
//  ."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
// }
// $navList .= '</ul>';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action){
 case 'something':
  
  break;
 
 default:
 include './view/home.php';
 
}
?>