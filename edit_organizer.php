
<!DOCTYPE html>
<html lang="en">

    <?php 
    include('header.php');
     include('session.php');
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
    <h1>Settings - Organizer</h1>
    <p class="lead">Event Scoresheets Management System</p>
  </div>
</header>


    <div class="container">
 
  <div class="col-lg-12">
 
 



 <a href="edit_staff.php" class="btn btn-danger"><strong>STAFF SETTINGS &raquo;</strong></a>  
 
 <hr />
 
 <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>Organizer Settings Panel</strong></h3>
            </div>
            <div class="panel-body">
    
    
    
    
    
        
   <form method="POST" enctype="multipart/form-data">
   
   
   
   
    <div class="col-lg-6">   
   <?php 
       $query = $conn->query("select * from organizer where organizer_id='$session_id'") or die(mysql_error());
		while ($row = $query->fetch()) 
        { ?>
            
       
        
       
        
    <table align="center">
     <tr><td colspan="5"><strong>Basic Information</strong><hr /></td></tr>
    <tr>
    <td>
    Firstname:
    <input type="text" name="fname" class="form-control" placeholder="Firstname" value="<?php echo $row['firstname']; ?>" aria-describedby="basic-addon1" required autofocus>
 </td>
    <td>&nbsp;</td>
    <td>
    Lastname:
    <input type="text" name="lname" class="form-control" placeholder="Lastname" value="<?php echo $row['lastname']; ?>" aria-describedby="basic-addon1" required autofocus>
 </td>
    </tr>
    
    <tr><td colspan="5">&nbsp;</td></tr>
    
    
   
    <td>
   </td>
    </tr>
    
    
     
 
         
    </table>
   
       </div>
       
       
       
       
       
       
       
       
       <div class="col-lg-6">   
 
        
    <table align="center">
     <tr><td colspan="5">&nbsp; <hr /></td></tr>
    
   
    
     <tr><td colspan="5">&nbsp;</td></tr>
      <tr><td colspan="5"><strong>Account Security</strong><hr /></td></tr>
     <tr>
    <td>
    Username:
    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" aria-describedby="basic-addon1" required autofocus>
 </td>
    <td>&nbsp;</td>
    <td>
    Password:
    <input id="password" type="password" name="passwordx" class="form-control" placeholder="Password" value="<?php echo $row['password']; ?>" aria-describedby="basic-addon1" required autofocus>
 </td>
    <td>&nbsp;</td>
    <td>
    Re-type Password:
    <input id="confirm_password" type="password" name="password2x" class="form-control" placeholder="Re-type Password" value="<?php echo $row['password']; ?>" aria-describedby="basic-addon1" required autofocus>
 
 </td>
    </tr>
    <tr>
    <td colspan="4"></td>
    <td><span id='message'></span></td>
    </tr>
    <tr><td colspan="5"><strong>Confirmation</strong><hr /></td></tr>
         <tr>
    <td>
    
 </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    Current Password:
    <input type="password" name="password" class="form-control" placeholder="Password"  required="true"/>
 </td>
 
    </tr>
    </table>
    
     <?php } ?>
     
       </div>


<div class="col-lg-12">
<hr />
       <div class="btn-group pull-right">
  <a href="home.php" type="button" class="btn btn-default">Cancel</a>
  <button  name="update" type="submit" class="btn btn-success">Update</button>
   </div>
 </div> 
   
   </form>
  
            </div><!-- end panel body -->
          </div> <!-- end panel -->
  </div><!-- end col-12 -->
  
</div> <!-- end container -->
          
          
   <?php include('footer.php'); ?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="javascript/jquery1102.min.js"></script>
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    
    
     <script>
 
    $('#password, #confirm_password').on('keyup', function () {
      if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
      } else 
        $('#message').html('Not Matching').css('color', 'red');
    });
    
    </script>
  

  </body>
</html>
 
    
    
<?php 

if(isset($_POST['update']))
{
    
    
    
    
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    
    $file_loc = $_FILES['file']['tmp_name'];
 
	$folder="uploads/";

	$new_file_name = strtolower($file);

    
    
        $final_file=str_replace(' ','-',$new_file_name);
    
    
    
       $cname=$_POST['cname']; 
       $caddress=$_POST['caddress'];  
       $ctelephone=$_POST['ctelephone']; 
       
       $cemail=$_POST['cemail'];  
       $cwebsite=$_POST['cwebsite'];
   
   
   
   
   $fname=$_POST['fname']; 
   $mname=$_POST['mname'];  
   $lname=$_POST['lname']; 
   
   $email=$_POST['email'];  
   $pnum=$_POST['pnum'];
   
   $username=$_POST['username'];  
   $password=$_POST['password'];  
   
   $passwordx=$_POST['passwordx'];  
   $password2x=$_POST['password2x'];
   
   
 
  
  
 if($passwordx==$password2x)
 {
     if($password==$check_pass)
    {
        if(move_uploaded_file($file_loc,$folder.$final_file))
    { 
       $conn->query("update organizer set fname='$fname',mname='$mname',lname='$lname',username='$username',password='$passwordx',email='$email',pnum='$pnum',company_name='$cname',company_address='$caddress',company_logo='$final_file',company_telephone='$ctelephone',company_email='$cemail',company_website='$cwebsite' WHERE organizer_id='$session_id'");

   } 
   
    ?>
 <script>
			                                      
			      								window.location = 'selection.php';
			      							   	alert('Organizer <?php echo $fname." ".$mname." ".$lname; ?> updated successfully!');						
			      								</script>
 <?php
   
   }
    else
    { ?>
        <script>
 
			      							   	alert('Organizer <?php echo $fname." ".$mname." ".$lname; ?> update cannot be done. Bad user password.');						
			      								</script>
    <?php }
  
 }
 else
 {
  ?>
<script>
 
			      							   	alert('Organizer <?php echo $fname." ".$mname." ".$lname; ?> update cannot be done. Check password to change');						
			      								</script>
<?php  
 }
 
} ?>