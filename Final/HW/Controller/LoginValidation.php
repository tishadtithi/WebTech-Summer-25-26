<?php

session_start();

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];

    if (isset($_POST["gender"]))
    {
        $gender = $_POST["gender"];
    }

    if ($name == "" || $email == "" || $gender == "")
    {
        $message = "Required field is missing!";
    }
    else
    {
        $_SESSION["name"] = $name;

        if (isset($_POST["remember"]))
        {
            setcookie("remember_user", $name, time() + 86400);
        }

        $message = "Welcome," . $name . "! Login successful! Session created!";
    }
}

if (isset($_COOKIE["remember_user"]) && $name == "")
{
    $name = $_COOKIE["remember_user"];
}

?>