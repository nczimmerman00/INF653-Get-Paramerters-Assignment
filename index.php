<?php
$firstName;
$lastName;
$age;
if (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['age'])) {
    $firstName = htmlspecialchars($_GET['firstName']);
    $lastName = htmlspecialchars($_GET['lastName']);
    $age = htmlspecialchars($_GET['age']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1><?php if (empty($firstName) || empty($lastName) || empty($age)) {
        echo "Please enter your information: ";
    }?></h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="firstName">First Name: </label>
        <input type="text" id="firstName" name ="firstName" autocomplete="off">
        </br>
        <label for="lastName">Last Name: </label>
        <input type="text" id="lastName" name="lastName" autocomplete="off">
        <br>
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Clear</button>
        </div>
        
        <br></br>

        <h2><?php if(!empty($firstName) && !empty($lastName) && !empty($age)) {
            echo "Hello, my name is " . $firstName . " " . $lastName . ".\n";
        }?></h2>
        <p><?php if(!empty($firstName) && !empty($lastName) && !empty($age)) {
            echo "I am " . $age . " years old and ";
            if ($age >= 18) {
                echo "I am old enough to vote in the United States.</br></br>";
            }
            else {
                echo "I am not old enough to vote in the United States.</br></br>";
            }
            $daysAge = $age * 365;
            echo "That's " . $daysAge . " days old!</br></br>";
        }
        date_default_timezone_set("America/Chicago");
        echo "Today's date is " . date("m-d-Y");?></p>
</body>

</html>