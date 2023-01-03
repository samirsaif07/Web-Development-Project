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
       float:center;
    }
    .sidebar header{
        font-size: 15px;
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
        width:100%;
        line-height:70px;
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
    @media screen and (max-width: 740px){
        .sidebar header{
        font-size: 10px;
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
<header>DELIVERY STATUS RELATED</header>
<ul>
<li><a href="d.php"> ENTRY</a></li>
<li><a href="ddd.php">TABLE</a></li>


</ul>
</div>
</body> 
</html>