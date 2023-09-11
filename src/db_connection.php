<?php
#TODO: create new connection to db for each query and disconnect once query is finished

function test_function() {
  echo "this is a test";
}

function add(string $name, string $description, int $quantity, float $price, string $conn) {
  $connection = pg_connect($conn);
  $res = pg_query($connection, "insert into products (name, description, quantity, price) values ('$name', '$description', $quantity, $price);");
  pg_close($connection);
  return $res;
}

function remove(int $id, $conn) {
  $connection = pg_connect($conn);
  $res = pg_query(pg_connect($conn), "delete from products where id = $id;");
  pg_close($connection);
  return $res;
}

function update(int $id, string $name, string $description, int $quantity, float $price, $conn) {
  $connection = pg_connect($conn);
  $res = pg_query(pg_connect($conn), "update products set name = '$name', description = '$description', quantity = $quantity, price = $price where id = $id;");
  pg_close($connection);
  return $res;
}

function get_filtered(string $filter, $conn) {
  $connection = pg_connect($conn);
  $res = pg_query(pg_connect($conn), "select * from products where name like '%$filter%' or description like '%$filter%' or cast(price as text) like '%$filter%' or cast(quantity as text) like '%$filter%';");
  pg_close($connection);
  return $res;
}

function get_sorted(string $sortBy, $conn) {
  $connection = pg_connect($conn);
  $res = pg_query(pg_connect($conn), "select * from products order by $sortBy;");
  pg_close($connection);
  return $res;
}

function get_all($conn) {
  $connection = pg_connect($conn);
  $res = pg_query(pg_connect($conn), "select * from products;");
  pg_close($connection);
  return $res;
}

function get_one(int $id, $conn) {
  $connection = pg_connect($conn);
  $res = pg_query(pg_connect($conn), "select * from products where id = $id;");
  pg_close($connection);
  return $res;
}