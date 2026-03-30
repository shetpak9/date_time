<h2>Write</h2><br><br>
<form method="POST" action="">
    Write Something: 
    <input type="text" name="write"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>

<?php
if(isset($_POST['submit'])){
    $write = $_POST['write'];
    $file = fopen($_GET['file'], "a");
    fwrite($file, $write . "\n");
    fclose($file);
    header("Location: /date_time/display?file=" . $_GET['file']);
}
