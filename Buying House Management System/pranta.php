<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<body>
 <div class="container">
    <form action="lala.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label>Main Buyer</label>
      </div>
      <div class="col-75">
        <select  name="mainb">
          <option>Pranta</option>
          <option>Samir</option>
          
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label>Customer Name</label>
      </div>
      <div class="col-75">
        <input type="text"  name="cusname">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Order No</label>
      </div>
      <div class="col-75">
        <input type="text"  name="orderno">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label>Ref Order No</label>
      </div>
      <div class="col-75">
        <select  name="ron">
          <option>K</option>
          <option>F</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product Item Code</label>
      </div>
      <div class="col-75">
        <input type="text"  name="pic">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label>Product Type</label>
      </div>
      <div class="col-75">
        <select  name="pt">
          <option>K</option>
          <option>L</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Item Type</label>
      </div>
      <div class="col-75">
        <select  name="it">
          <option>K</option>
          <option>L</option>
          
        </select>
      </div>
    </div>
    
<div class="row">
      <div class="col-25">
        <label>Additional Activities</label>
      </div>
      <div class="col-75">
        <select  name="aa">
          <option>S</option>
          <option>P</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Measurment</label>
      </div>
      <div class="col-75">
        <input type="text"  name="m">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Colour</label>
      </div>
      <div class="col-75">
        <input type="text"  name="c">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>OPD</label>
      </div>
      <div class="col-75">
        <input type="text"  name="opd">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Delivery Date</label>
      </div>
      <div class="col-75">
        <input type="text"  name="dd">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Order QTY</label>
      </div>
      <div class="col-75">
        <input type="text"  name="oq">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label>Unit</label>
      </div>
      <div class="col-75">
        <select  name="u">
          <option>L</option>
          <option>M</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Size</label>
      </div>
      <div class="col-75">
        <input type="text"  name="s">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Price</label>
      </div>
      <div class="col-75">
        <input type="text"  name="p">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Customer Address</label>
      </div>
      <div class="col-75">
        <input type="text"  name="i">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit">
    </div>
    

    
    </form>
 </div>
</body>
</body>
</html>