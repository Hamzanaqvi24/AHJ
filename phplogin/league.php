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
<div class="team">
    <br>
    <h2 style="color: #132257;">The League</h2>
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
                    <img class="two" src="https://cdn.media.amplience.net/i/partycity/213203?$large$&fmt=auto&qlt=default" alt="Vikes" width="400" height="350">
                </div>
                <div class="col"> <div class="card-block px-2">
                    <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Team Hamza</h4> </div>
                    <hr>
                    <ul>
                        <li>0 Championships</li>
                        <li>0-0 Record</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2.5 g-2.5">
        <div class="col">
            <div class="card2">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img class="two" src="https://content.sportslogos.net/logos/7/6446/full/4290_los_angeles__chargers-helmet-2020.png" alt="Char" width="350" height="300">
                    </div>
                    <div class="col"> <div class="card-block px-2">
                        <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Team Jarrett</h4> </div>
                        <hr>
                        <ul>
                            <li>0 Championships</li>
                            <li>0-0 Record</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2.5 g-2.5">
        <div class="col">
            <div class="card2">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <img class="two" src="https://content.sportslogos.net/logos/7/151/full/ki7ghgfrfy7ufmkza3fetxz64.png" alt="Pats" width="400" height="300">
                    </div>
                    <div class="col"> <div class="card-block px-2">
                        <div style="text-align: center;color: #132257;font-family: 'Comic Sans MS',sans-serif"><h4>Team Andrew</h4> </div>
                        <hr>
                        <ul>
                            <li>0 Championships</li>
                            <li>0-0 Record</li>
                        </ul>
                    </div>
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
