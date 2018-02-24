<?php
$con = mysqli_connect("localhost", "root", "", "store")or die (mysqli_error($con));
$criteria = mysqli_real_escape_string($con, $_REQUEST['criteria']);
$sql = "SELECT name from '$criteria'";
$select_query_result = mysqli_query($con, $sql) or die(mysqli_error($con));
while ($row = mysqli_fetch_array($select_query_result)) {
    echo '<tr><td><input type="radio" name="place" value="group" id="item"></td><td>', $row['name'], '</td><td width="100%">';
}
mysqli_close($con);
session_start();
?>