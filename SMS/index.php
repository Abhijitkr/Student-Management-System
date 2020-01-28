<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
</head>

<body>
    <h2><a href="login.php" style='float:right'>Admin Login</a></h2>
    <h1 align='center'>Welcome to student management system</h1>
    <form method="post" action="index.php">
        <table border='1' width='30%' align='center'>
            <tr>
                <th colspan='2' align='center'>Student Information</th>
            </tr>
            <tr>
                <td>Choose Standard: </td>
                <td><select name="std">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3th</option>
                        <option value="4">4th</option>
                        <option value="5">5th</option>
                        <option value="6">6th</option>
                        <option value="7">7th</option>
                        <option value="8">8th</option>
                        <option value="9">9th</option>
                        <option value="10">10th</option>
                        <option value="11">11th</option>
                        <option value="12">12th</option>
                    </select></td>
            </tr>
            <tr>
                <td>Enter Rollno:</td>
                <td><input type="number" name="roll" min='1' required></td>
            </tr>
            <tr>
                <td colspan='2' align='center'><input type="submit" value='Show Info'></td>
            </tr>
        </table>
    </form>
</body>

<?php

$con = mysqli_connect('localhost','root','','sms');
include ('functions.php');
$class = $_POST['std'];
$rollno = $_POST['roll'];

showdata($class,$rollno);

?>

</html>