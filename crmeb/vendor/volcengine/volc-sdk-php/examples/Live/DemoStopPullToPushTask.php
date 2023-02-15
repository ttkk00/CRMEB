// Code generated by protoc-gen-volcengine-sdk
// source: stopPullToPushTask
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Live\Live::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Live\Models\Request\StopPullToPushTaskRequest();
$request->setTaskId("your TaskId");


$response = new Volc\Service\Live\Models\Response\StopPullToPushTaskResponse();
try {
    $response = $client->stopPullToPushTask($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}