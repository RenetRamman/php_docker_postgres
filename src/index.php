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
  <h1>Products</h1>
</div>

<div class="center">
  <div class="search">
    <form method="get">
      <label for="search">Filter / search:</label><br>
      <input type="search" name="search">
    </form>
  </div>

  <div class="box">
    <table>
      <tr>
        <th>
          <form method="get">
            <input type="submit" name="sort"
                  value="Id"/>
          </form>
        </th>
        <th>
          <form method="get">
            <input type="submit" name="sort"
                  value="Name"/>
          </form>
        </th>
        <th>
        <form method="get">
            <input type="submit" name="sort"
                  value="Description"/>
          </form>
        </th>
        <th>
          <form method="get">
            <input type="submit" name="sort"
                  value="Quantity"/>
          </form></th>
        <th>
        <form method="get">
            <input type="submit" name="sort"
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
</div>

</body>
</html>