#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $client = new rabbitMQClient("testRabbitMQ.ini","testServer");

    $request = array();
    $request['type'] = "Login";
    $request['userName'] = $userName;
    $request['password'] = $password;
    $response = $client->send_request($request);

    if ($response == "LoginSuccess") {
        header("Location: home.php");
        exit();
    } else {
        $message = "Invalid username or password";
    }
}
?>

<html>
<head>
    <title>AHJFF User Login</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />  
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #132257;">
    <div class="container">
        <a class="navbar-brand" href="home.php"><img src="https://ih1.redbubble.net/image.3755463340.7606/st,small,507x507-pad,600x600,f8f8f8.jpg" alt ="Logo" width="100" height="100"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            </ul>
        </div>
    </div>
</nav> 
    <div class="phppot-containertile-container">

        <form name="frmUser" method="post" action="">
            <div class="message text-center"><?php if(isset($message)) { echo $message; } ?></div>

            <h1 class="text-center">Login</h1>

            <div>
                <div class="row">
                    <label> Username </label> <input type="text" name="userName"
                        class="full-width" required>
                </div>
                <div class="row">
                    <label>Password</label> <input type="password" name="password"
                        class="full-width" required>
                </div>
                <div class="row">
                    <input type="submit" name="submit" value="Submit"
                        class="full-width">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
