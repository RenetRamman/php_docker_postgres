<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>

<h1>Products</h1>
<?php
require_once("db_connection.php");
require_once("helper.php");
?>

<div>
  <?php
    require_once("navbar.php");
  ?>

  <form method="get">
    <label for="search">Filter / search:</label><br>
    <input type="search" name="search">
  </form>

  <table>
    <tr>
      <th>
        <form method="get">
          <input type="submit" name="button1"
                value="Id"/>
        </form>
      </th>
      <th>
        <form method="get">
          <input type="submit" name="button2"
                value="Name"/>
        </form>
      </th>
      <th>
      <form method="get">
          <input type="submit" name="button3"
                value="Description"/>
        </form>
      </th>
      <th>
        <form method="get">
          <input type="submit" name="button4"
                value="Quantity"/>
        </form></th>
      <th>
      <form method="get">
          <input type="submit" name="button5"
                value="Price"/>
        </form>
      </th>
    </tr>
    <?php
      if (!isset($result)) {
        $result = get_all($conn_string);
      }
      populate_table_edit_delete($result);
    ?>
  </table>
</div>

</body>
</html>