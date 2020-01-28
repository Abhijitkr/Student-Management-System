<?php

session_start();
if (isset($_SESSION['uid'])) {
} else
    header('location: ../login.php');

?>


<?php

include 'adminheader.php';
include 'admintitle.php';
$con = mysqli_connect('localhost','root','','sms');
$id = $_GET['id'];
$query = "SELECT * FROM `student` WHERE `id` = '$id'";
$run = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($run);

?>

<div class="adminSubTitle">
    <h2>Edit Student</h2>
</div>
<form action="updateformdata.php" method="post" enctype="multipart/form-data">
    <table width="50%" align="center" style="font-size:20px;">
        <tr>
            <td>Full Name </td>
            <td><input type="text" name="fullname" required="required" value="<?php echo $data['FullName']; ?>"></td>
        </tr>
        <tr>
            <td>Roll No. </td>
            <td><input type="text" name="rollno" required="required" value="<?php echo $data['rollno']; ?>"></td>
        </tr>
        <tr>
            <td>Class: </td>
            <td><input type="number" min="1" max="12" name="class" required="required" value="<?php echo $data['class']; ?>"></td>
        </tr>
        <tr>
            <td>Father's Name </td>
            <td><input type="text" name="fathersname" required="required" value="<?php echo $data['fathersname']; ?>"></td>
        </tr>
        <tr>
            <td>Contact No. </td>
            <td><input type="text" maxlength="10" required="required" name="number" value="<?php echo $data['contact']; ?>"></td>
        </tr>
        <tr>
            <td>Address </td>
            <td><textarea name="address" required="required" type="text" cols="30" rows="10"><?php echo $data['address']; ?></textarea></td>
        </tr>
        <tr>
            <td>Image </td>
            <td><input type="file" name="simg" required="required"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>

