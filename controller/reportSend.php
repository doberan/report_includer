<?php
  
  // enumをインポートする
  //require_once('/model/m_project.php');

  // json生成
  $reportData = array(
    "user" => $_POST['user'],
    "month" => $_POST['month'],
    "week" => $_POST['week'],
    "project" => $_POST['project'],
    "time" => $_POST['work_time'],
    "description" => $_POST['description'],
    "send" => $_POST['reportSend']
  );
  $reportJson = json_encode($reportData);
  // output
  print($reportJson);