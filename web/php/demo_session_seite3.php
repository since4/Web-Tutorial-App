<!--used for 011.php-->
<?php

session_start(['use_only_cookies' =>0 , 'use_trans_sid'=> 1]);

if (empty($_SESSION['zaehler'])) {
    $_SESSION['zaehler'] = 1;
} else {
    $_SESSION['zaehler']++;
}
?>

<p>
Hallo Besucher, Sie haben diese Seite <?php echo $_SESSION['zaehler']; ?> mal
aufgerufen.
</p>

<p>
// Funktioniert, falls das Session-Cookie akzeptiert wurde;
<br>
Hier gehts
<a href="demo_session_seite1.php?">
    weiter zur Seite 1</a>.
</p>

<p>
// Oder die Session-ID mit übergeben, für den Fall, dass sie benötigt wird;
<br>
Hier gehts
<a href="demo_session_seite1.php?<?php echo htmlspecialchars(SID); ?>">
    weiter zur Seite 1</a>.
</p>

<?php
echo "<br>" . "session_name(): " . session_name() ."<br>";
echo "session_id(): " . session_id()."<br>";
echo "SID: " . SID . "<br>";
echo "htmlspecialchars(SID): " . htmlspecialchars(SID). "<br>";
?>


<p>
<br>
Back to
<a href="011.php?<?php echo htmlspecialchars(SID); ?>">
    011.php</a>.
</p>