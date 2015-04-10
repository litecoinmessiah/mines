<?php
$rkey = "1-aIcW94fguJ"; //random string hidden from view
$shash hash('sha256', $rkey);
echo "<br>Secret hash: ".$shash;
?>

//{"status":"success","id":11806534,"game_hash":"1b78eac17c3a150f7814d86766e4ba721e265761","secret":"53dfc081ee31ec8b35f452cd4794e44201057ad863f0bbab58cd6bca4190652f","bet":0.349893,"stake":0.349893,"next":0.013995,"betNumber":"0","gametype":"practice","num_mines":1}
//player_hash=9662b867a0c6dd0d984c6882e44f859f98d54f64&bet=0.349893&num_mines=1	
