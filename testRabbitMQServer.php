#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');



function doLogin($userName,$password)
{
  $servername = 'localhost';
  $uname = 'root';
  $pw = 'toor';
  $dbname = 'payload';
  $conn = new mysqli($servername, $uname, $pw, $dbname);
  $statement = "SELECT * FROM payload.users WHERE userName = '$userName'";
  $result = mysqli_query($conn, $statement);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if ($count != 0) {
    $statement2 = "SELECT password FROM payload.users WHERE userName = '$userName'";
    $result2 = mysqli_query($conn, $statement2);
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $hashedpass = $row2['password'];
    if (array_key_exists('password', $row2)) {
      $hashedpass = $row2['password'];
    } else {
      // handle the case where the key doesn't exist
      return "Could not retrieve password from database";
    }
  
    // Check if the password is correct
    if (password_verify($password, $hashedpass)) {
      // Return a success status code
      return "LoginSuccess";
    } else {
      // Return an error status code
      return "IncorrectPassword";
    }
  } else {
    // Return an error status code
    return "UserNotFound";
  }
}

function requestProcessor($request)
{
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "Login":
      return doLogin($request['userName'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

$server->process_requests('requestProcessor');
exit();
?>

