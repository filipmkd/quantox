<?php
    
?>

<!DOCTYPE html>
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
                    <label for="inputEmail">Insert your Email:</label>
                    <input type="email" class="form-control" id="inputEmail" name="email">
                    <label for="inputPassword">Insert your Password:</label>
                    <input type="password" class="form-control" id="inpuPassword" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </body>
</html>
