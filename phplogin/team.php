<?php
include 'main.php';
check_loggedin($pdo);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AAHJFF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
<body>
<body class="loggedin">		
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #132257;">
    <div class="container">
        <a class="navbar-brand" href="home.php"><img src="https://ih1.redbubble.net/image.3755463340.7606/st,small,507x507-pad,600x600,f8f8f8.jpg" alt ="Logo" width="100" height="100"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">
                        HOME
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="league.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LEAGUE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="league.php">LEAGUE INFO</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="team.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        TEAM
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="team.php">VIEW TEAM</a></li>
                    </ul>
                </li>
				<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="players.php">
                        PLAYERS
                    </a>
                </li>
				<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profile.php">
						PROFILE
                    </a>
                </li>
				<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">
                        CONTACT
                    </a>
                </li>
                <?php if ($_SESSION['role'] == 'Admin'): ?>
					<a href="admin/index.php" target="_blank"><i class="fas fa-user-cog"></i>Admin</a>
					<?php endif; ?>
					<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">
                        LOGOUT
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
    <br>
    <div class="team">
        <br>
        <h2 style="color: #132257;">My Team</h2>
        <hr><br>
        <p></p>
    </div>
    <div class="formation">
        <div class="col-sm-4 col-lg-9"></div>
    </div>
    <div class="row row-cols-1 row-cols-md-2.5 g-2.5">
        <div class="col">
            <div class="card2">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img class="two" src="https://www.si.com/.image/t_share/MTg0MDkzNjc5NzAxNDY5MDEz/image1.png" alt="Vikes" width="600" height="500">
                    </div>
                    <div class="col"> <div class="card-block px-2">
                        <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Team Hamza</h4> </div>
                        <hr>
                        <ul>
                    
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <hr/>
            <div class="row">
                <div class="col-sm">
                    <p class="text-center"> &copy; 2023 Hamza Jarrett Andrew NJIT | All rights reserved | Terms of Use | Privacy</p>
                </div>
            </div>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
    </body>
    </html>
<?php
session_start();
// Send GET request to API to retrieve all players
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1:9999/showTeam?userId=" . $_SESSION['id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Decode JSON response into PHP array
$players = json_decode($response, true);

// Loop through players and display their information
foreach ($players as $player) {
    echo "Player ID: " . $player["Player ID"] . "<br>";
    echo "Name: " . $player["Name"] . "<br>";
    echo "Position: " . $player["Position"] . "<br>";
    echo "Fumbles: " . $player["Fumbles"] . "<br>";
    echo "Passes Attempted: " . $player["Passes Attempted"] . "<br>";
    echo "Passes Completed: " . $player["Passes Completed"] . "<br>";
    echo "Passes Touchdown: " . $player["Passes Touchdown"] . "<br>";
    echo "Passes Yards: " . $player["Passes Yards"] . "<br>";
    echo "Received Touchdowns: " . $player["Received Touchdowns"] . "<br>";
    echo "Received Yards: " . $player["Received Yards"] . "<br>";
    echo "Receptions: " . $player["Receptions"] . "<br>";
    echo "Targets: " . $player["Targets"] . "<br>";
    echo "Rush Attempts: " . $player["Rush Attempts"] . "<br>";
    echo "Rush Touchdowns: " . $player["Rush Touchdowns"] . "<br>";
    echo "Rushed Yards: " . $player["Rushed Yards"] . "<br>";
    echo "Team: " . $player["Team"] . "<br>";

    // Add button to add player
    echo '<button onclick="dropPlayer(' . $player["Player ID"] . ',' . $_SESSION['id'] . ')">Drop Player</button>';
    echo "<br><br>";
}
?>
<script>
function dropPlayer(playerID, userID) {
    // Send POST request to API to drop player using XHR
    var url = "http://127.0.0.1:9999/dropPlayer?pid=" + playerID + "&uid=" + userID;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "plain/text");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Reload page to display updated player list
            location.reload();
        }
    };
    xhr.send();
}
</script>
