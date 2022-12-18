<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style2.css" />
</head>
<body>
<div class="login-banner" style=""
>
<div class="login-head-container" style="">
<div class="header-title" style="
    text-align: center;
    "
><h1>MARKET</h1></div></div>
<div class="form" style= " 
width: 300px;
    margin: 0 auto;
    border: solid 1px black;
    text-align: center;
    margin-top: 15%;
    overflow: hidden;
">
<h2>DASHBOARD</h2> 
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index2.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>