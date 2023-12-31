<?php
require_once("db_connection.php");
require_once("vars.php");

function populate_table_edit_delete($res) {
  // Used in index.php to list the products into the table
  while ($row = pg_fetch_row($res))
      {
        print "<tr><th>$row[0]</th><th>$row[1]</th><th>$row[2]</th><th>$row[3]</th><th>$row[4]</th>
        <th>

        <button onclick=\"editProductPage($row[0])\">Edit</button>

        </th>
        <th>

        <form method=\"post\">
          <input type=\"hidden\" id=\"id\" name=\"id\" value=\"$row[0]\">
          <input type=\"submit\" name=\"button7\"
                value=\"Delete\"/>
        </form>
        
        </th>
        </tr>";
      }
}

// Used in edit_product.php to get the correct product information about the editable product
function list_editable_product($res) {
  $row = pg_fetch_row($res);
  print "<form method=\"post\">
  <input type=\"hidden\" id=\"id\" name=\"id\" value=$row[0]>
  <label for=\"name\">Name:</label><br>
  <input required=\"true\" type=\"text\" id=\"name\" name=\"name\" value=\"$row[1]\"><br>
  <label for=\"desc\">Description:</label><br>
  <input type=\"text\" id=\"desc\" name=\"desc\" value=\"$row[2]\"><br>
  <label for=\"quant\">Quantity:</label><br>
  <input type=\"number\" id=\"quant\" name=\"quant\" value=\"$row[3]\"><br>
  <label for=\"price\">Price:</label><br>
  <input required=\"true\" step=\"0.01\" type=\"number\" id=\"price\" name=\"price\" value=\"$row[4]\"><br>
  <div class=\"center\">
    <input class=\"m10\" type=\"submit\" name=\"edit\" value=\"Save changes\"/>
  </div>
</form>";
}

// Used by index.php to get the products sorted by ?sort=by
if(isset($_GET['sort'])) {
  $by = $_GET['sort'];
  $result = get_sorted(by: $by, conn: $conn_string);
}

// Used in add_product.php to save insert the new product with correct data to the database
if(isset($_POST['button6'])) {
  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $quant = $_POST['quant'];
  $price = $_POST['price'];
  if ($quant == "") {
    $quant = 0;
  }
  add(conn: $conn_string, name: $name, description: $desc, price: $price, quantity: $quant);
}


if(isset($_POST['button7'])) {
  $id = $_POST['id'];
  remove(conn: $conn_string, id: $id);
  $result = get_all($conn_string);
}

// Used in index.php to get only the products that match the search string in any of their fields
if(isset($_GET['search'])) {
  $filter = $_GET['search'];
  $result = get_filtered(conn: $conn_string, filter: $filter);
}

// Used in edit_product.php to save the edited values to the database
if(isset($_POST['edit'])) {
  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $quant = $_POST['quant'];
  $price = $_POST['price'];
  $id = $_POST['id'];
  if ($quant == "") {
    $quant = 0;
  }
  update(conn: $conn_string, id: $id, name: $name, description: $desc, quantity: $quant, price: $price);
}

// Script used by the Edit buttons on index.php to link to the correct edit product page
?>
<script>
  function editProductPage(id) {
    window.location.href = "edit_product.php?id="+id;
  }
</script>