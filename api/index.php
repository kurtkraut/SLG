<?php

require 'vendor/autoload.php';
$app = new \Slim\Slim();
$app->config('debug', true);

# GET #
$app->get('/jobs/list', function () {
  header("Cache-Control: max-age=60, public");
  echo "This will output the current job list";
});

$app->get('/jobs/forme', function () {
  header("Cache-Control: max-age=60, private");
  echo "This will offer an availuable job for a subscribed node.";
});

$app->get('/jobs/status/:jobid', function ($jobid) {
  header("Cache-Control: max-age=60, public");
  echo "This will output the current status of $jobid.";
});

$app->get('/nodes/list', function () {
  header("Cache-Control: max-age=60, public");
  echo "This will output the list of current subscribed nodes.";
});

# POST #

$app->post('/subscribe', function () {
  header("Cache-Control: private, max-age=0, no-cache");
  echo "This will provide subscription for nodes to receive tasks.";
});

$app->run();
?>
