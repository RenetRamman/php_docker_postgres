<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>

<?php
  require_once("db_connection.php");
  require_once("helper.php");
  require_once("navbar.php");
?>

<div class="center">
  <h1>Add new product</h1>

  <div class="box left">
    <form method="post">
      <label for="name">Name:</label><br>
      <input required="true" type="text" id="name" name="name"><br>
      <label for="desc">Description:</label><br>
      <input type="text" id="desc" name="desc"><br>
      <label for="quant">Quantity:</label><br>
      <input type="number" id="quant" name="quant"><br>
      <label for="price">Price:</label><br>
      <input required="true" step="0.01" type="number" id="price" name="price"><br>

      <div class="center">
        <input class="m10" type="submit" name="button6" value="Add product"/>
      </div>
    </form>
  </div>
</div>

</body>
</html>