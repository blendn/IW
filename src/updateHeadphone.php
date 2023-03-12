<?php
require_once 'core/init.php';

$instance = DB::getInstance();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $instance->query("UPDATE headphone SET name = ?, manufacturer = ?, price = ?, release_date = ?, description = ? WHERE headphone . id = ?", array(
        $_POST['name'], 
        $_POST['manufacturer'], 
        $_POST['price'], 
        $_POST['release_date'], 
        $_POST['description'], 
        $_POST['id']
    ));
}

$instance->query("SELECT * FROM headphone WHERE id = ? ", array(
    $_GET['id']
));

$results = $instance->results();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Headphone</title>
</head>
<body>
    <?php
        foreach ($results as $headphone) {
    ?>
    <form action="" method="POST">
        <div class="field">
            <input type="hidden" name="id" value="<?php echo $headphone->id;?>" autocomplete="off">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $headphone->name;?>" autocomplete="off">
            <br>
            <label for="manufacturer">Manufacturer</label>
            <input type="text" name="manufacturer" value="<?php echo $headphone->manufacturer;?>" autocomplete="off">
            <br>
            <label for="price">Price</label>
            <input type="number" name="price" value="<?php echo $headphone->price;?>" autocomplete="off">
            <br>
            <label for="release_date">Release Date</label>
            <input type="date" name="release_date" value="<?php echo $headphone->release_date;?>" autocomplete="off">
            <br>
            <label for="description">Description</label>
            <input type="text" name="description" value="<?php echo $headphone->description;?>" autocomplete="off">
            <br>
            <button type="submit">Update</button>
        </div>
    </form>
    <?php
    }
    ?>
</body>
</html>