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

<h2 align="center">Delete Student</h2>

<table align="center">
    <form action="deletestudent.php" method="post">
        <tr>
            <td>Enter Class: </td>
            <td><input type="number" name="class" placeholder="Enter your class"></td>
            <td>Enter Name: </td>
            <td><input type="text" name="studname" placeholder="Enter your name"></td>
            <td><input type="submit" value="Search" name="submit"></td>
        </tr>
    </form>
</table>
<table align="center" border="2" width="80%" style="margin-top:10px;">
    <tr style="background: #000; color: #fff;">
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Roll No.</th>
        <th>Edit</th>
    </tr>

<?php
if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost','root','','sms');
    $class = $_POST['class'];
    $name = $_POST['studname'];
    $query = "SELECT * FROM `student` WHERE `class` = '$class' AND `FullName` LIKE '%$name%'";
    $run = mysqli_query($con, $query);
    if(mysqli_num_rows($run)<1){
        echo '<tr><td colspan="5" align="center"><h3>No Record Found !</h3></td></tr>';
    }
    else{
        $count = 0;
        while($data=mysqli_fetch_assoc($run)){
            $count++;
            ?>
            <tr align="center">
                <td><?php echo $count; ?></td>
                <td><?php echo $data['FullName']; ?></td>
                <td><img src="../dataimages/<?php echo $data['image']; ?>" alt="Image Not Found !" style="max-width:100px;"/></td>
                <td><?php echo $data['rollno']; ?></td>
                <td><a href="deleteform.php?id=<?php echo $data['id'];?>">Delete</a></td>
            </tr>
            <?php
        }
    }
}

?>
</table>