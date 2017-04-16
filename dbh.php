<?php

$conn= mysqli_connect('localhost','root','root','EliKapaluto');  //connection establishment and initialization.

if (!$conn) {
	die("connection failed: ".mysqli_connect_error());   //case connection fails.
}