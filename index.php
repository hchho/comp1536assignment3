<?php
session_start();

if(!isset($_SESSION['user'])) {
    header("location: login.php");
}
$num1 = rand(0, 50);
$num2 = rand(0, 50);

$operator = array("+", "-", "*");
$index = rand(0, sizeof($operator) - 1);

$answer;
switch($index) {
    case 0:
    $answer = $num1 + $num2;
    break;
    case 1:
    $answer = $num1 - $num2;
    break;
    case 2:
    $answer = $num1 * $num2;
    break;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Math Game</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="game-header">
                    <div class="row">
                        <div class="col-sm-12 bg-dark">
                            <h1 class="game-title text-center">Math Game</h1>
                        </div>
                    </div>
                </div>
                <div class="content">          
                    <div class="game-body">
                        <hr />
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-xs-4">
                                    <?php
                                    echo '<h2 class="text-center">' . $num1 . '</h2>';
                                    ?>
                                </div>
                                <div class="col-xs-4">
                                    <?php
                                    echo '<h2 class="text-center">' . $operator[$index] . '</h2>';
                                    ?>
                                </div>
                                <div class="col-xs-4">
                                    <?php
                                    echo '<h2 class="text-center">' . $num2 . '</h2>';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                    <div class="row">                        
                        <div class="col-sm-12">
                            <form action="./validate.php" method="post">
                                <div class="form-group">
                                    <label for="answer">
                                        <h3>Answer:</h3>
                                    </label>
                                    <input class="form-control" type="text" name="userAnswer" id=answer autocomplete="off">
                                    <br>
                                    <input class="form-control btn btn-primary" type="submit" name="submit" value="Submit">
                                    <input type="hidden" name="answer" value='<?php echo $answer?>'>
                                    <input type="hidden" name="score" value='<?php if (!isset($_SESSION['score'])) {$_SESSION['score'] = 0; echo $_SESSION['score']; }else{echo $_SESSION['score'];}?>'>
                                    <input type="hidden" name="score" value='<?php if (!isset($_SESSION['question'])) {$_SESSION['question'] = 1; echo $_SESSION['question']; }else{echo $_SESSION['question'];}?>'>
                                </div>
                            </form>
                            <?php
                            echo $_SESSION['report']['notNumber'];
                            echo $_SESSION['report']['correct'];
                            echo $_SESSION['report']['wrong'];
                            ?>
                        </div>
                    </div>
                    <div class="game-footer">
                    <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-xs-6">
                                    <h4 class="text-left">
                                        <?php echo "Score: " . $_SESSION['score']?>
                                    </h4>
                                </div>
                                <div class="col-xs-6">
                                    <h4 class="text-right">
                                        <?php echo "Question: " . $_SESSION['question'];?>
                                    </h4>
                                </div>
                                <hr>
                                <br>
                            </div>
                            <div class="col-sm-12">
                                <form action="login.php">
                                    <button type="submit" class="btn btn-default form-control">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>
