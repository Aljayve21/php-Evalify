<!DOCTYPE html>
<html lang="en">
    <?php

    include('header.php');

    ?>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                </div>
            </div>
        </div>

        <header class="jumbotron subhead" id="overview">
            <div class="container">
                <h1>Account Registration</h1>

                <p class="lead">Evalify Management System</p>
            </div>
        </header>
    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="firstname" type="text" name="firstname" placeholder="Enter your first name" />
                                                        <label for="firstname">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="lastname" type="text" name="lastname" placeholder="Enter your last name" />
                                                        <label for="lastname">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required autofocus>
                                                <label for="username">Username</label>
                                            </div>
                                            <tr class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="true" autofocus="true" />
                                                        <label for="password">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input id="confirm_password" type="password" name="password2" class="form-control" placeholder="Re-type Password" aria-describedby="basic-addon1" required="true" autofocus="true" />
                                                        <label for="password2">Confirm Password</label>
                                                    </div>
                                                </div>


                                                <tr>
                                                    <td colspan="4">&nbsp;</td>
                                                    <td><span id="message"></span></td>
                                                </tr>
                                            </div>
                                            <div class="mt-4 mb-0">

                                                
                                                <div class="d-grid">
                                                <a href="index.php" type="button" class="btn btn-default mx-5 by-2">Cancel</a>
                                                <button name="register" type="submit" class="btn btn-primary">Register</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="javascript/jquery1102.min.js"></script>

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

if(isset($_POST['register']))
{
 
   $fname=$_POST['firstname'];
   $lname=$_POST['lastname'];  
   
   $username=$_POST['username'];  
   $password=$_POST['password'];  
   $password2=$_POST['password2'];  
  
 if($password==$password2)
 {
  $conn->query("insert into organizer (firstname, lastname,username,password,access,status)values('$fname','$lname','$username','$password','Organizer','offline')");

 ?>
<script>
			                                      
			      								window.location = 'index.php';
			      							   	alert('Organizer <?php echo $fname." ".$mname." ".$lname; ?> registered successfully!');						
			      								</script>
<?php  
 }
 else
 {
  ?>
<script>
 
			      							   	alert('Organizer <?php echo $fname." ".$lname; ?> registration cannot be done. Password and Re-typed password did not match.');						
			      								</script>
<?php  
 }
 
} ?>