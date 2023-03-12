<?php
require_once 'core/init.php';
$instance = DB::getInstance();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $instance->query("INSERT INTO headphone (id, name, manufacturer, price, release_date, description) VALUES (?, ?, ?, ?, ?, ?) ", array(
        $_POST['id'],
        $_POST['name'], 
        $_POST['manufacturer'], 
        $_POST['price'], 
        $_POST['release_date'], 
        $_POST['description']
    ));
}

$results = $instance->results();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Headphone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <form action="" method="POST">
        <div class="field">
            <label for="id">Id</label>
            <input type="number" name="id" value="" autocomplete="off">
            <br>
            <label for="name">Name</label>
            <input type="text" name="name" value="" autocomplete="off">
            <br>
            <label for="manufacturer">Manufacturer</label>
            <input type="text" name="manufacturer" value="" autocomplete="off">
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" value="" autocomplete="off">
            <br>
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" value="" autocomplete="off">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" value="" autocomplete="off">
            <br>
            <button type="submit">Insert</button>
        </div>
    </form>
</body>
</html>