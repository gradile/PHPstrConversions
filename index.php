<?php
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>PHP String conversions</title>
</head>

<body>
    <div class="container">
        <h1>PHP String conversions</h1>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Steps</h2>
                <?php
                $str = "many birds, fly south, for the WINTER* ";
                $arg2 = ",";
                $arg3 = "*";

                stepsString($str, $arg2, $arg3);
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Only one function</h2>
                <?php
                $str = "many birds, fly south, for the WINTER* ";
                changeString($str);
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Interactive</h2>
                <p>1) Make the first letter of the first word uppercase</p>
                <p>2) Convert the entire string to lowercase</p>
                <p>3) Remove all the commas</p>
                <p>4) Replace all the asterisks with exclamations and</p>
                <p>5) Clear any whitespace from the end. Make your code a function that can be fed any $str.</p>

                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label class="form-label" for="stringToChange">Enter the string you want to change</label>
                                <input class="form-control" type="text" name="stringToChange" placeholder="Enter an string">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <?php
                        if (!empty($_POST["stringToChange"])) {
                            $strToChange = $_POST['stringToChange'];
                        }
                        changeString($strToChange);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Interactive</h2>
                <h4>Replace two characters on the string</h4>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label class="form-label" for="originalString">Enter the string you want to change</label>
                                <input class="form-control" type="text" name="originalString" placeholder="Enter an string">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="char1">Enter the first char you want to replace</label>
                                <input class="form-control" type="text" name="char1" placeholder="Char to be replaced">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="char2">Enter the first replacement char</label>
                                <input class="form-control" type="text" name="char2" placeholder="Replacement char">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="char3">Enter the second char you want to change</label>
                                <input class="form-control" type="text" name="char3" placeholder="Second char to be replaced">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="char4">Enter the second replacement char</label>
                                <input class="form-control" type="text" name="char4" placeholder="Second char to be replaced">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <?php
                        if (!empty($_POST["originalString"])) {
                            $originalString = $_POST['originalString'];
                        }
                        if (!empty($_POST["char1"])) {
                            $char1 = $_POST['char1'];
                        } else {
                            $char1 = "";
                        }
                        if (!empty($_POST["char2"])) {
                            $char2 = $_POST['char2'];
                        } else {
                            $char2 = "";
                        }
                        if (!empty($_POST["char3"])) {
                            $char3 = $_POST['char3'];
                        } else {
                            $char3 = "";
                        }
                        if (!empty($_POST["char4"])) {
                            $char4 = $_POST['char4'];
                        } else {
                            $char4 = "";
                        }
                        changeChars($originalString, $char1, $char2, $char3, $char4);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>