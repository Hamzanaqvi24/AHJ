<?php

if(isset($_POST['playerName'])) {
    $playerName = $_POST['playerName'];
    echo "You selected the player: " . $playerName;
} else {
    echo "No player name selected";
}

?>
