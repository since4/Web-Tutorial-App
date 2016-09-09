<!--used for 011.php-->
<?php
// seite1.php

session_start(['use_only_cookies' =>0 , 'use_trans_sid'=> 1]);

echo 'Willkommen auf Seite #1 <br><br>';
echo 'Die $_Session Variablen werden gesetzt <br><br>';

$_SESSION['farbe'] = 'grün';
$_SESSION['tier'] = 'Spinne';
$_SESSION['zeit'] = time();

echo "// Funktioniert, falls das Session-Cookie akzeptiert wurde";
echo '<br /><a href="demo_session_seite2.php">Seite 2</a><br>';

echo "// Oder die Session-ID mit übergeben, für den Fall, dass sie benötigt wird";
echo '<br /><a href="demo_session_seite2.php?' . SID . '">Seite 2</a><br>';


echo "<br>" . "session_name(): " . session_name() ."<br>";
echo "session_id(): " . session_id()."<br>";
echo "SID: " . SID ."<br>";
echo "htmlspecialchars(SID): " . htmlspecialchars(SID). "<br>";

?>

