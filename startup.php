<?php
$dbname = "GameOn";

$con = mysql_connect("localhost","root","");
if(!$con)
{
	die("Could not connect");
}
else
{
	echo "Connected.";
}

$query = "CREATE DATABASE $dbname";

if(!mysql_query($query,$con))
 {
	die("<br />Could not create database: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Database created.";
	
	}

mysql_select_db("$dbname",$con);

$query = "CREATE TABLE Player(username VARCHAR(50) NOT NULL, password INTEGER NOT NULL, score INTEGER, name VARCHAR(50), surname VARCHAR(50), rating INTEGER, about VARCHAR(50), online INTEGER, game_name VARCHAR(50),  PRIMARY KEY(username))";
if(!mysql_query($query,$con))
 {
	die("<br />Could not create Player table: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Player table created.";
	
	}

$query = "CREATE TABLE Leaderboard(username VARCHAR(50) NOT NULL,score INTEGER,position INTEGER,PRIMARY KEY(username))";
if(!mysql_query($query,$con))
 {
	die("<br />Could not create Leaderboard table: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Leaderboard table created.";
	
	}

$query = "CREATE TABLE Words(rowIndex INTEGER AUTO_INCREMENT, word VARCHAR(50),latin VARCHAR(50), isValidComb INTEGER, PRIMARY KEY(rowIndex))";
if(!mysql_query($query,$con))
 {
	die("<br />Could not create Words table: ".mysql_error($con));	
 	
 }
else
 {
	echo "Words table created.";
	
	}


$query = "CREATE TABLE Message(To_user VARCHAR(50) NOT NULL,From_user VARCHAR(50) NOT NULL,Message_m VARCHAR(1000) NOT NULL,Reply_m VARCHAR(50000),Read_m INTEGER NOT NULL, message_id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY)";
if(!mysql_query($query,$con))
 {
	die("<br />Could not create Message table: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Message table created.";
	
	}


 $query ="  CREATE TABLE Developer (username VARCHAR( 50 ) NOT NULL ,password VARCHAR( 50 ) NOT NULL ,email_address VARCHAR( 50 ) NOT NULL ,name VARCHAR( 50 ) NULL ,surname VARCHAR( 50 ) NOT NULL)";

if(!mysql_query($query,$con))
 {
	die("<br />Could not create Developer table: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Developer table created.";
	
	}


$query = "CREATE TABLE Game (name VARCHAR( 50 ) NOT NULL ,link VARCHAR( 50 ) NOT NULL ,owner VARCHAR( 50 ) NOT NULL ,status INT NOT NULL)"; 

if(!mysql_query($query,$con))
 {
	die("<br />Could not create Game table: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Game table created.";
	
	}


 $query = "CREATE TABLE buddy (requester VARCHAR( 50 ) NOT NULL ,buddy_f VARCHAR( 50 ) NOT NULL ,status INT NOT NULL)";
if(!mysql_query($query,$con))
 {
	die("<br />Could not create Buddy table: ".mysql_error($con));	
 	
 }
else
 {
	echo "<br />Buddy table created.";
	
	}





mysql_close($con);


?>