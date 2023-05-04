<?php
include 'main.php';
check_loggedin($pdo);

$servername = "localhost";
$username = "root"
$password = "";
$dbname = "ffootball";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
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
    <div class="squad">
        <h2 style="color: #132257;">Players</h2>
        <hr>
            <div class="col-sm-4 col-lg-9"></div>
            </div>
                <div class="row row-cols-1 row-cols-md-2.5 g-2.5">
                    <div class="col">
                        <div class="card2">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://media.pff.com/player-photos/nfl/61398.png?w=648&h=410" alt="JJ" width="400" height="300">
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Justin Jefferson</h4> </div>
                                    <ul>
                                        <li>Wide Receiver #18</li>
                                        <li>Minnesota Vikings</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://static.www.nfl.com/image/private/t_headshot_desktop/league/vs40h82nvqaqvyephwwu" alt="PM" width="300" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Patrick Mahomes</h4> </div>
                                    <ul>
                                        <li>Quarterback #10</li>
                                        <li>Kansas City Chiefs</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card2">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://static.www.nfl.com/image/private/t_player_profile_landscape/f_auto/league/pbl27kxsr5ulgxmvtvfn" alt="JoeyB" width="400" height="300">
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Joe Burrow</h4> </div>
                                    <ul>
                                        <li>Quarterback #9</li>
                                        <li>Cincinnati Bengals</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://a.espncdn.com/combiner/i?img=/i/headshots/nfl/players/full/3117251.png" alt="CMC" width="400" height="300">
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Christian McCaffrey</h4> </div>
                                    <ul>
                                        <li>Running back #23</li>
                                        <li>San Francisco 49ers</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://static.www.nfl.com/image/private/t_headshot_desktop/league/gorkhvipsk0gdqb6bo34" alt="Trav" width="300" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Travis Kelce</h4> </div>
                                    <ul>
                                        <li>Tight End #87</li>
                                        <li>Kansas City Chiefs</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://b.fssta.com/uploads/application/nfl/headshots/13955.vresize.350.350.medium.26.png" alt="Josh" width="300" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Josh Allen</h4> </div>
                                    <ul>
                                        <li>Quarterback #17</li>
                                        <li>Buffalo Bills</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://static.www.nfl.com/image/private/t_headshot_desktop/league/tojsgl1ttwjkvo6x7wgy" alt="Kupp" width="300" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Cooper Kupp</h4> </div>
                                    <ul>
                                        <li>Wide Receiver #10</li>
                                        <li>Los Angeles Rams</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://static.www.nfl.com/image/private/t_headshot_desktop/league/o8tlhps5u1tvnaaxlpjk" alt="Saquon" width="300" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Saquon Barkley</h4> </div>
                                    <ul>
                                        <li>Running back #26</li>
                                        <li>New York Giants</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://a.espncdn.com/combiner/i?img=/i/headshots/nfl/players/full/4241389.png" alt="CD" width="350" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>CeeDee Lamb</h4> </div>
                                    <ul>
                                        <li>Wide Receiver #88</li>
                                        <li>Dallas Cowboys</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="two" src="https://static.www.nfl.com/image/private/t_headshot_desktop/league/hcvd2avk0kufoli80veb" alt="Diggs" width="300" height="300"  >
                                </div>
                                <div class="col"> <div class="card-block px-2">
                                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Stefon Diggs</h4> </div>
                                    <ul>
                                        <li> Wide Receiver #14</li>
                                        <li>Buffalo Bills</li>
                                    </ul>
                                </div>
				</div>
			<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ffootball";

//Connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT PlayerName, Position, FantasyPts, pass_att, pass_cmp, pass_td, pass_yds, receive_td, receive_yds, receptions, targets, rush_att, rush_td, rush_yds, team FROM playerswk1 ORDER BY Position, FantasyPts DESC";
$result = $conn->query($sql);

if ($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Add a link to the player's name with a unique ID and a JavaScript onclick event
        echo "<a href='#' id='player_" . $row['PlayerName'] . "' onclick='postPlayerName(\"" . $row['PlayerName'] . "\")'>Player Name: " . $row["PlayerName"] . "</a> - Position: " .
        $row["Position"]. " - Fantasy Points: " . $row["FantasyPts"]. " - Passes attempted: " . $row["pass_att"]. " - Passes completed: " . $row["pass_cmp"]. " - Pass touchdowns:".
        $row["pass_td"]. " - Pass yards:". $row["pass_yds"]. " - Received touchdowns:". $row["receive_td"]. " - Received yards:". $row["receive_yds"]. " - Receptions:". $row["receptions"].
        " - Targets:". $row["targets"]. " - Rush attempt:". $row["rush_att"]. " - Rush touchdowns:". $row["rush_td"]. " - Rush yards:". $row["rush_yds"]. " - Team:". $row["team"].
        "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<!-- Add the following JavaScript code after the PHP code -->

<script>
function postPlayerName(playerName) {
    // Create a hidden form and append it to the document body
    var form = document.createElement("form");
    form.style.display = "none";
    document.body.appendChild(form);

    // Create a hidden input field for the player name and append it to the form
    var input = document.createElement("input");
    input.type = "hidden";
    input.name = "playerName";
    input.value = playerName;
    form.appendChild(input);

    // Set the form's action and method, and submit it
    form.action = "process.php";
    form.method = "POST";
    form.submit();
}
</script>
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
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
// Send GET request to API to retrieve all players
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://10.0.2.15:9999/getAllPid");
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
    echo '<button onclick="addPlayer(' . $player["Player ID"] . ',' . $_SESSION['id'] .')">Add Player</button><br><br>';
}
?>
<script>
function addPlayer(playerID, userID) {
    // Send POST request to API to add player using cURL
    var data = {playerID: playerID};
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://10.0.2.15:9999/addPlayer?pid=" + playerID + "&uid=" + userID, true);
    xhr.setRequestHeader('Content-Type','text/plain');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Reload page to display updated player list
            location.reload();
        }
    };
    xhr.send(JSON.stringify(data));
}
</script>
