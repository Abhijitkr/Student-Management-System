<?php 

    $con = mysqli_connect('localhost','root','','sms');
    
    $id = $_REQUEST['id'];
    
    $query = "DELETE FROM `student` WHERE `id` = '$id'";
    $run = mysqli_query($con,$query);
    if($run == true){
        ?>
        <script>
            alert("Data Deleted Successfully !");
            window.open('deletestudent.php','_self');
        </script>
        <?php
    }

?>