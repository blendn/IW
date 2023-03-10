<?php
require_once 'core/init.php';

error_reporting(E_ERROR | E_PARSE);
$user = new User(); 

if ($user->isLoggedIn()) {
    if ($user->hasPermission('standard')) {
        Redirect::to('index.php');
    }
} else {
    Redirect::to('index.php');
}

$instance = DB::getInstance();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $instance->query("DELETE FROM headphone WHERE id = ? ", array(
        $_POST['id']
    ));
}
$instance->query("SELECT * FROM headphone");
$results = $instance->results();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard_title">
        <h1>Dashboard</h1>
        <a href="createHeadphone.php" class="btn bg-green">Create a Headphone</a>
        <a href="index.php" class="btn bg-grey">Go Home</a>
    </div>
    <div class="wrapper">
       <?php
        foreach ($results as $headphone) {
        ?>
        <div class="product">
            <img src=<?php echo "images/h" . $headphone->id . ".jpg"?>>
            <h5><?php echo $headphone->name; ?></h5>
            <h5><?php echo $headphone->manufacturer; ?></h5>
            <h5><?php echo $headphone->price; ?></h5>
            <h5><?php echo $headphone->release_date; ?></h5>
            <h5 class="product-description"><?php echo $headphone->description; ?></h5>
            <a 
                href="updateHeadphone.php?id=<?php echo $headphone->id?>" 
                class="btn bg-green"
            >
                Update Product
            </a>
            <form action="dashboard.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $headphone->id?>">
                <button type="submit" class="btn bg-red">Delete</button>
            </form>
        </div>
        <?php
        }
        ?> 
    </div>
</body>
</html>