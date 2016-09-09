<!--used for 011.php-->
<?php
// seite2.php

session_start(['use_only_cookies' =>0 , 'use_trans_sid'=> 1]);

echo 'Willkommen auf Seite #2<br><br>';
echo 'Die $_Session Variablen der vorigen Seite werden gezeigt <br><br>';

echo $_SESSION['farbe'] ."<br>";  // grün
echo $_SESSION['tier'] ."<br>";   // Spinne
echo date('d.m.Y H:i:s', $_SESSION['zeit']) ."<br>" . "<br>";

echo "// Funktioniert, falls das Session-Cookie akzeptiert wurde";
echo '<br /><a href="demo_session_seite3.php">Seite 3</a><br>';

echo "// Oder die Session-ID mit übergeben, für den Fall, dass sie benötigt wird";
echo '<br /><a href="demo_session_seite3.php?' . SID . '">Seite 3</a><br>';

echo htmlspecialchars(SID). "<br>";
echo "<br>" . "session_name(): " . session_name() ."<br>";
echo "session_id(): " . session_id()."<br>";
echo "SID: " . SID ."<br>";
echo "htmlspecialchars(SID): " . htmlspecialchars(SID). "<br>";
?>

