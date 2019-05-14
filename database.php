<?php
//Connect to MYSQL
$con = mysqli_connect("us-cdbr-iron-east-02.cleardb.net","b44412fff442c7","d569001d","heroku_8a309184014934b");

//Test Connection

if(mysqli_connect_errno()) {
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}