<?php

    require_once 'user.php';
    //require_once 'validate.php';
    require_once 'db.php';

    //use \Website\User;
    //use \Website\Validate;

    if(isset($_POST['register']))
    {

        $user = new User($_POST['name'], $_POST['email'], $_POST['password'], $_POST['selection']);

        print_r($user);

        $db = new DB();
        $db->saveToDatabase($user);
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
    <form method="POST" action="">
        <div class="container d-flex flex-column">
            <div class="container d-flex flex-row">
                <div class="container d-flex flex-column">
                    <label for="inputName">Insert your Name:</label>
                    <input type="text" class="form-control" id="inputName" name="name">
                    <label for="inputEmail">Insert your Email:</label>
                    <input type="email" class="form-control" id="inputEmail" name="email">
                    <label for="inputPassword">Insert your Password:</label>
                    <input type="password" class="form-control" id="inpuPassword" name="password">
                    <label for="inputRepeatPassword">Repeat your Password:</label>
                    <input type="password" class="form-control" id="inputRepeatPassword" name="repeatpassword">
                    <label for="inputSelectType">Choose a class:</label>
                    <select class="form-control" id="inputSelectType" name="selection">
                        <option value="service">Service</option>
                        <option value="product">Product</option>
                    </select>
                </div>
            </div>
            <input name='register' type="submit" class="btn btn-primary" value='Submit'>
        </div>
    </form>
    </body>
</html>