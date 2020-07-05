<?php 
include('ScreenshotMachine.php');
include_once __DIR__ . '/vendor/autoload.php';
include_once "templates/base.php";
include_once "authentification.php";
session_start();

// API Key
$customer_key = "";
$secret_phrase = ""; 

$machine = new ScreenshotMachine($customer_key, $secret_phrase);

/* These two next lines are set in order to define the file name, with an random 
ID between 10 and 100, followed by the name of the website captured */
$id = rand(10,100);
$website = $_POST["websitename"]; 
// Website URL to be screenshoted 
$options['url'] = $_POST["website"];

// Parameters for screenshot
$options['dimension'] = "1920x1080";  
$options['device'] = "desktop";
$options['format'] = "png";
$options['cacheLimit'] = "0";
$options['delay'] = "0";

$api_url = $machine->generate_screenshot_api_url($options);


// Saving Screenshot -> File
$output_file = "".$id."_".$website.".png";
file_put_contents($output_file, file_get_contents($api_url));

echo 'Your screenshot has been upload on GDrive as ' . $output_file . PHP_EOL . ' if you were succesfully connected on your Google account before capturing your screenshot.';

if ($output_file  && $client->getAccessToken()) {

	  $file = new Google_Service_Drive_DriveFile();
	  $file->setName("".$output_file."");
	  $result2 = $service->files->create(
	      $file,
	      array(
	        'data' => file_get_contents($api_url),
	        'mimeType' => 'application/octet-stream',
	        'uploadType' => 'multipart',
	      )
	  );
}

?>
