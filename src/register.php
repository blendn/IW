<?php 
require_once 'core/init.php';

if(Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'email' => array (
                'required' => true,
                'min' => 12,
                'max' => 50,
                'unique'=> 'users',
                'contains' => '@',
                'endswith' => '.com'
            ),
            'password' => array(
                'required' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            )
        ));

        if ($validation->passed()) {
            $user = new User();

            $salt = Hash::salt(32);


            try {
                
                $user->create(array(
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt,
                    'name' => Input::get('name'),
                    'joined' => date('Y-m-d H:i:s'),
                    'group' => 1

                ));

            } catch (Exception $e) {
                die($e->getMessage());
            }

            Session::flash('success', 'You registered successfully!');
            Redirect::to('index.php');
        } else {
            foreach ($validation->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }
}
?>
<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link rel="stylesheet" href="styles/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Register</h1>
            <form method="post" novalidate>
                <div class="input-group_register">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" value="<?php echo escape(Input::get('name')); ?>" placeholder="Name">
                    </div>
                        
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" value="<?php echo escape(Input::get('email')); ?>" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
					<div class="input-field">
						<i class="fa-solid fa-lock"></i>
                        <input type="password" name="password_again" placeholder="Confirm Password">
					</div>
						
                    <p>Want to Log In instead? <a href="login.php">Click Here!</p>
                </div>
                <div class="btn-field">
                    <button type="submit" id="registerBtn">Register</button>
                </div>
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            </form>
        </div>
    </div>
</body>
</html>