<?php
    require_once 'core/init.php';

    if (Input::exists()) {
        if (Token::check(Input::get('token'))) {

            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'email' => array('required' => true),
                'password' => array('required' => true)
            ));

            if ($validation->passed()) {
                $user = new User();

                $remember = (Input::get('remember') === 'on') ? true : false;
                $login = $user->login(Input::get('email'), Input::get('password'), $remember);

                if ($login) {
                    Redirect::to('index.php');
                } else {
                    echo '<p>Sorry login failed!</p>';
                }
            } else {
                foreach ($validation->errors() as $error) {
                    echo $error, '<br>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="styles/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <div class="form-box">
                <h1 id="title">Log In</h1>
                <form name="form" onsubmit="return validated()" method="post">
                    <div class="input-group"> 
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="text" placeholder="Email" name="email" autocomplete="off">
                        </div>
						<div id="email_error">Please fill up your Email!</div>

                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Password" name="password">
                        </div>
						<div id="password_error">Please fill up your Password!</div>
                        <div>
                            <label for="remember">
                                <input type="checkbox" name="remember" id="remember"> Remember me
                            </label>
                        </div>
                        <p>Don't have an account? <a href="register.php">Register Here!</p>
                    </div>
					<div class="btn-field"> 
						<button type="submit" id="logInBtn">Log In</button>
					</div>
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                </form>	
            </div>
        </div>
		<script src="js/validation.js"></script>
    </body>
</html>
