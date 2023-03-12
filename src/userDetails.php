<?php 
require_once 'core/init.php';

error_reporting(E_ERROR | E_PARSE);

if (Session::exists('home')) {
    echo '<p>' . Session::flash('home') . '</p>';
}

$user = new User(); 

if ($user->isLoggedIn()) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>User Details</title>
    </head>
    <body>    
    <p>Hello <a href="profile.php?user=<?php echo escape($user->data()->email); ?>"><?php echo escape($user->data()->email); ?></a>!</p>

    <ul>    
        <li><a href="logout.php">Log Out</a></li>
        <li><a href="update.php">Update Details</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
    </ul>
    </body>
    </html>
<?php

    if ($user->hasPermission('admin')) {
        echo '<p>You are an administrator!</p>';
        echo '<a href="dashboard.php">View Dashboard</a>';
    } else if ($user->hasPermission('standard')) {
        echo '<p>You are a standard user!</p>';
    }

} else {
    echo '<p>You need to <a href="login.php">Log In</a> or <a href="register.php">Register!</a></p>';
}