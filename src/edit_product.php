<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>

  <?php
    require_once("navbar.php");
    require_once("helper.php");
    require_once("db_connection.php");
  ?>

  <div class="center">
    <h1>Edit product</h1>


    <div class="box">
      <?php
        $id = $_GET['id'];
        list_editable_product(get_one(conn: $conn_string, id: $id));
      ?>
    </div>

  </div>

</body>
</html>