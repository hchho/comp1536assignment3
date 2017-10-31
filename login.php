<?php 
session_start();
extract($_GET);
session_unset();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Math Game</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            .error_message {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Please login to play the math game</h1>
            
            <form class="form-horizontal" action="authenticate.php" method="post">
                <div class="row text-center">
                    <div class="col-xs-3 text-right">
                        <label for="email">Email: </label>
                    </div>
                    <div class="col-xs-9 text-left">
                        <input type="text" name="email" id="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xs-3 text-right">
                        <label for="password">Password: </label>
                    </div>
                    <div class="col-xs-9 text-left">
                        <input type="password" name="password" id="password" placeholder="Password"/>
                    </div>
                </div>
                <div class="col-xs-offset-3">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
            <div class="col-xs-offset-3 error_message">
            <?
            if ($error) {
                echo "Invalid login credentials";
            }
            ?>
            </div>
        </div>
    </body>
</html>