<?php 
include('header.php');
include('session.php');
?>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container"></div>
        </div>
    </div>
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>Settings - Staff</h1>
            <p class="lead">Judging Management System</p>
        </div>
    </header>

    <div class="container">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <a href="edit_organizer.php" class="btn btn-primary"><strong>ORGANIZER SETTINGS &raquo;</strong></a>
            <hr />
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Staff Settings Panel</strong></h3>
                </div>
                <div class="panel-body">
                    <form method="POST" enctype="multipart/form-data">
                        <?php 
                        $query = $conn->query("SELECT * FROM organizer WHERE org_id='$session_id'") or die(mysql_error());
                        
                        if ($query->rowCount() > 0) {
                            while ($row = $query->fetch()) { ?>
                                <input type="hidden" name="operation" value="update">
                                <input type="hidden" name="tabulator_id" value="<?php echo $row['org_id']; ?>">
                                <table align="center">
                                    <tr><td colspan="5"><strong>Basic Information</strong><hr /></td></tr>
                                    <tr>
                                        <td>Firstname:
                                            <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="<?php echo $row['firstname']; ?>" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>Lastname:
                                            <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="<?php echo $row['lastname']; ?>" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                                    <tr><td colspan="5"><strong>Account Security</strong><hr /></td></tr>
                                    <tr>
                                        <td>Username:
                                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>New Password:
                                            <input id="password" type="password" name="passwordx" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>Re-type Password:
                                            <input id="confirm_password" type="password" name="password2x" class="form-control" placeholder="Re-type Password" value="<?php echo $row['password']; ?>" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td><span id='message'></span></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                                    <tr><td colspan="5"><strong>Confirmation</strong><hr /></td></tr>
                                    <tr>
                                        <td colspan="5">Staff Current Password:
                                            <input type="password" name="tab_password" class="form-control" placeholder="Staff Current Password" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Organizer Current Password:
                                            <input type="password" name="org_password" class="form-control" placeholder="Organizer Current Password" aria-describedby="basic-addon1" required autofocus>
                                        </td>
                                    </tr>
                                </table>
                                <div class="col-lg-12">
                                    <hr />
                                    <div class="btn-group pull-right">
                                        <a href="home.php" type="button" class="btn btn-default">Cancel</a>
                                        <button name="update" type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            <?php }
                        } else { ?>
                            <input type="hidden" name="operation" value="add">
                            <table align="center">
                                <tr><td colspan="5"><strong>Basic Information</strong><hr /></td></tr>
                                <tr>
                                    <td>Firstname:
                                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" aria-describedby="basic-addon1" required autofocus>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>Lastname:
                                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" aria-describedby="basic-addon1" required autofocus>
                                    </td>
                                </tr>
                                <tr><td colspan="5">&nbsp;</td></tr>
                                <tr><td colspan="5"><strong>Account Security</strong><hr /></td></tr>
                                <tr>
                                    <td>Username:
                                        <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required autofocus>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>Password:
                                        <input id="password" type="password" name="passwordx" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required autofocus>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>Re-type Password:
                                        <input id="confirm_password" type="password" name="password2x" class="form-control" placeholder="Re-type Password" aria-describedby="basic-addon1" required autofocus>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                    <td><span id='message'></span></td>
                                </tr>
                                <tr><td colspan="5">&nbsp;</td></tr>
                                <tr><td colspan="5"><strong>Confirmation</strong><hr /></td></tr>
                                <tr>
                                    <td colspan="5">Organizer Password:
                                        <input type="password" name="org_password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required autofocus>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <div class="btn-group pull-right">
                                <a href="edit_organizer.php" type="button" class="btn btn-default">CANCEL</a>
                                <button name="add_tabulator" type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <?php include('footer.php'); ?>
    <script src="javascript/jquery1102.min.js"></script>
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>
        $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else {
                $('#message').html('Not Matching').css('color', 'red');
            }
        });
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operation = $_POST['operation'];
    $tabulator_id = $_POST['tabulator_id'];
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['passwordx'];
    $password2 = $_POST['password2x'];
    $tab_password = $_POST['tab_password'];
    $org_password = $_POST['org_password'];
    
    if ($password == $password2) {
        $org_query = $conn->query("SELECT * FROM organizer WHERE password='$org_password' AND access='Organizer'");
        $org_row = $org_query->fetch();
        $org_num_row = $org_query->rowCount();
        
        if ($org_num_row > 0) {
            if ($operation == 'update') {
                $stmt = $conn->prepare("UPDATE organizer SET firstname=?, lastname=?, username=?, password=? WHERE org_id=?");
                $stmt->execute([$fname, $lname, $username, $password, $tabulator_id]);
                
                echo "<script>
                alert('Staff $fname successfully updated...');
                window.location = 'edit_staff.php';
                </script>";
            } else {
                $stmt = $conn->prepare("INSERT INTO organizer (firstname, lastname, username, password, org_id, access, status) VALUES (?, ?, ?, ?, ?, 'Staff', 'offline')");
                $stmt->execute([$fname, $lname, $username, $password, $session_id]);
                
                echo "<script>
                alert('Staff $fname successfully added...');
                window.location = 'edit_staff.php';
                </script>";
            }
        } else {
            echo "<script>
            alert('Confirmation Password error... Please contact the event organizer.');
            window.location = 'edit_staff.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Password and Re-typed password did not match.');
        </script>";
    }
}
?>
