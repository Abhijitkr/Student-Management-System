<?php

function showdata($class, $rollno)
{
    $con = mysqli_connect('localhost', 'root', '', 'sms');
    $query = "SELECT * FROM `student` WHERE `class` = '$class' AND `rollno` = '$rollno'";
    $run = mysqli_query($con, $query);
    if (mysqli_num_rows($run) > 1) {
        $data = mysqli_fetch_assoc($run);
?>
        <table border="1" align="center" width="70%" style="margin-top: 10px;">
            <tr>
                <th align="center" colspan="3">Student Detail</th>
            </tr>
            <tr>
                <td rowspan="6"><img src="dataimages/<?php echo $data['image']; ?>" alt="Image Not Found !" style="max-height: 150px; max-width: 120px;"></td>
                <th>Name</th>
                <td><?php echo $data['FullName']; ?></td>

            </tr>
            <tr>
                <th>Roll No.</th>
                <td><?php echo $data['rollno']; ?></td>
            </tr>
            <tr>
                <th>Class</th>
                <td><?php echo $data['class']; ?></td>
            </tr>  
            <tr>
                <th>Father Name</th>
                <td><?php echo $data['fathersname']; ?></td>
            </tr>   
            <tr>
                <th>Contact No.</th>
                <td><?php echo $data['contact']; ?></td>
            </tr>  
            <tr>
                <th>Address</th>
                <td><?php echo $data['address']; ?></td>
            </tr>                   
        </table>
<?php
    } else {
        echo "<script>alert('No Student Found.');</script>";
    }
}

?>