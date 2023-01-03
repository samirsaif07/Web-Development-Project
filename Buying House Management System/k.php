<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    body{
        font-family: 'Roboto' , sans-serif;
    }
    *{
        margin: 0;
        padding:0;
        list-style:none;
        text-decoration:none;
    }
    .sidebar{
       position:fixed;
       width:100%;
       height:100%;
       background: #042331; 
    }
    .sidebar header{
        font-size: 30px;
        color:white;
        text-align:center;
        line-height:70px;
        background:#063146;
        user-select:none;
        width:20%;
    }
    .sidebar ul a{
        display:block;
        text-align:center;
        height:100%;
        width:20%;
        line-height:70px;
        color:white;
        box-sizing:border-box;
        border-top:1px solid rgba(255,255,255,.1);
        border-bottom:1px  solid black;
        transition:.4s;
    }
    ul li:hover a{
        padding-left:20px;
        color:black;
    }
    .btn{
        border:1px solid #3498db;
        background:none;
        padding:10px 20px;
        font-size:14px;
        font-family:"montserrat";
        margin:80px 80px;
        color:black;
    }
    
    @media screen and (max-width: 740px){
        .sidebar header{
        font-size: 15px;
        color:white;
        text-align:center;
        line-height:40px;
        background:#063146;
        user-select:none;
        width:20%;
        
    }
    .sidebar ul a{
        display:block;
        text-align:center;
        font-size: 15px;
        line-height:40px;
        color:white;
        box-sizing:border-box;
        border-top:1px solid rgba(255,255,255,.1);
        border-bottom:1px  solid black;
        transition:.4s;
        
        width:20%;
    }
    ul li:hover a{
        padding-left:20px;
        color:black;
    }
    }
    
    </style>
</head>
<body>
<div class="sidebar">
<header>ADMIN</header>
<ul>
<li><a href="pranta.php">ORDER ENTRY</a></li>
<li><a href="pro.php">PRODUCTION ENTRY</a></li>
<li><a href="del.php">DELIVERY STATUS</a></li>
<li><a href="follow.php">FOLLOW UP</a></li>
<li><a href="c.php">CHALLAN</a></li>
</ul>
<button class="btn"><b><a href="log1.php">LOG OUT</a></b></button>
</div>

</body> 
</html>