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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Please login to play the math game</h1>
        <div class="content col-xs-8 col-xs-offset-2">
            <form class="form-horizontal" action="authenticate.php" method="post">
                <div class="form-group">
                    <div class="row text-center">
                        <div class="col-sm-3 text-left">
                            <label for="email">Email: </label>
                        </div>
                        <div class="col-sm-8 text-left">
                            <input class="form-control" type="text" name="email" id="email" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row text-center">
                        <div class="col-sm-3 text-left">
                            <label for="password">Password: </label>
                        </div>
                        <div class="col-sm-8 text-left">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-offset-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="col-xs-offset-3 error">
                <?
                if ($error) {
                    echo "Invalid login credentials";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
