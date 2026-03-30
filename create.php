<h2>Create</h2><br><br>
<form method="POST" action="">
    Create File: 
    <input type="text" name="file"><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
<?php
if(isset($_POST['submit'])){
    $file =$_POST['file'] . ".txt";
    $handle = fopen($file, "x+");
    fclose($handle);
    header("Location: /date_time/write?file=$file.txt");
}