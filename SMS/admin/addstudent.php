<?php

session_start();
if (isset($_SESSION['uid'])) {
} else
    header('location: ../login.php');

?>


<?php

include 'adminheader.php';
include 'admintitle.php';

?>

<div class="adminSubTitle">
    <h2>Add Student</h2>
</div>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <table width="50%" align="center" style="font-size:20px;">
        <tr>
            <td>Full Name </td>
            <td><input type="text" name="fullname" placeholder="Enter your Full Name" required="required"></td>
        </tr>
        <tr>
            <td>Roll No. </td>
            <td><input type="text" name="rollno" placeholder="Enter your Roll Number" required="required"></td>
        </tr>
        <tr>
            <td>Class: </td>
            <td><input type="number" min="1" max="12" name="class" placeholder="Enter your Class" required="required"></td>
        </tr>
        <tr>
            <td>Father's Name </td>
            <td><input type="text" name="fathersname" placeholder="Enter your Father's Name" required="required"></td>
        </tr>
        <tr>
            <td>Contact No. </td>
            <td><input type="text" maxlength="10" name="number" placeholder="Enter your Contact Number" required="required"></td>
        </tr>
        <tr>
            <td>Address </td>
            <td><textarea name="address" type="text" cols="30" rows="10" placeholder="Enter your Address" required="required"></textarea></td>
        </tr>
        <tr>
            <td>Image </td>
            <td><input type="file" name="simg" required="required"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form>
</body>

</html>

<?php 

if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root','','sms');
    $fullname = $_POST['fullname'];
    $rollno= $_POST['rollno'];
    $class= $_POST['class'];
    $fathersname= $_POST['fathersname'];
    $contact= $_POST['number'];
    $address= $_POST['address'];
    $image= $_FILES['simg']['name'];
    $tempimg= $_FILES['simg']['tmp_name'];
    move_uploaded_file($tempimg,"../dataimages/$image");
    $query = "INSERT INTO `student`(`FullName`, `rollno`, `class`, `fathersname`, `contact`, `address`,`image`) VALUES ('$fullname','$rollno','$class','$fathersname','$contact','$address','$image')";
    $run = mysqli_query($con,$query);
    if($run == true){
        ?>
        <script>alert("Data Inserted Successfully !");</script>
        <?php
    }
}

?>