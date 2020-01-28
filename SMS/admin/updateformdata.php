<?php 

    $con = mysqli_connect('localhost','root','','sms');
    $fullname = $_POST['fullname'];
    $rollno= $_POST['rollno'];
    $class= $_POST['class'];
    $fathersname= $_POST['fathersname'];
    $contact= $_POST['number'];
    $address= $_POST['address'];
    $id = $_POST['id'];
    $image= $_FILES['simg']['name'];
    $tempimg= $_FILES['simg']['tmp_name'];
    move_uploaded_file($tempimg,"../dataimages/$image");
    $query = "UPDATE `student` SET `FullName` = '$fullname', `rollno` = '$rollno', `class` = '$class', `fathersname` = '$fathersname', `contact` = '$contact', `address` = '$address', `image` = '$image' WHERE `id` = '$id';";
    $run = mysqli_query($con,$query);
    if($run == true){
        ?>
        <script>
            alert("Data Updated Successfully !");
            window.open('updateform.php?id=<?php echo $id; ?>','_self');
        </script>
        <?php
    }

?>