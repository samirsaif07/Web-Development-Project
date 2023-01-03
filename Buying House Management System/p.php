<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { background:rgb(30,30,40); }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
    </style>
</head>
<body>
<body>
<div class="con">
<form action="pp.php" method="POST">

<label >Order No</label><input type="text" name="orderno" class="feedback-input" placeholder="Order No"><br>

<label>Production Discription</label> <input type="text" name="pd" class="feedback-input" placeholder="Production Discription"><br>

<label>Production Start Time</label> <input type="text" name="pst" class="feedback-input" placeholder="Production Start Time"><br>
<label>Production Finish Time</label> <input type="text" name="pft" class="feedback-input" placeholder="Production Finish Time"><br>
<label>Production QTY</label> <input type="text" name="pq" class="feedback-input" placeholder="Production QTY"><br>
<label>Remarks</label> <input type="text" name="r" class="feedback-input" placeholder="Remarks"><br>



<button type="submit" name="submit">Submit </button>

</form>
</div>
</body>
</html>