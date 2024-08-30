<?php

$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    echo "Connection Failed";
}

if(!mysqli_select_db($conn,"canteen"))
echo"<br>Database not selected";
