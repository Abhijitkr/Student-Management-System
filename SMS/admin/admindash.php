<?php include 'adminheader.php'; ?>
    <div class="admintitle">
        <h2><a href="../logout.php" style="float:right; color:#fff; margin-right:10px;">Logout</a></h2>
        <h1 align="center">Admin Dashboard</h1>
    </div>
    <div class="admindashboard">
        <table width="50%" align="center">
            <tr>
                <td>1. </td>
                <td><a href="addstudent.php">Insert Student</a></td>
            </tr>
            <tr>
                <td>2. </td>
                <td><a href="updatestudent.php">Update Student</a></td>
            </tr>
            <tr>
                <td>3. </td>
                <td><a href="deletestudent.php">Delete Student</a></td>
            </tr>
        </table>
    </div>
</body>

</html>

<?php

session_start();
if (isset($_SESSION['uid'])) {
} else
    header('location: ../login.php');

?>