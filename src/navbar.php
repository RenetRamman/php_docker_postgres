<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>

  <div>
    <ul class="nav">
      <li class="float">
        <?php
          $uri = strtok($_SERVER['REQUEST_URI'], '?');
          if ($uri == "/index.php" or $uri == "/") {
            print '<button class="active" onclick="homePage()">Home</button>';
          }
          else {
            print '<button class="inactive" onclick="homePage()">Home</button>';
          }
        ?>
      </li>
      <li class="float">
        <?php
          if ($uri == "/add_product.php") {
            print '<button class="active" onclick="addProductPage()">Add product</button>';
          }
          else {
            print '<button class="inactive" onclick="addProductPage()">Add product</button>';
          }
        ?>
      </li>
    </ul>
  </div>
  <script>
    function addProductPage() {
      window.location.href = "add_product.php";
    }
    function homePage() {
      window.location.href = "index.php";
    }
  </script>

</body>
</html>