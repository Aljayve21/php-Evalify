 

<!DOCTYPE html>
<html lang="en">
  
  <?php
  include('header2.php');
  ?>

  <body>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
 
               <a href="#" data-toggle="modal" data-target="#about-modal" class="brand">ABOUT</a> 
               
        </div>
      </div>
    </div>



    <header class="jumbotron subhead"id="overview">
        <div class="container">
            <h1>Welcome</h1>
            <p class="lead">Event Scoresheets Management System</p>
        </div>
    </header>
    
    <div class="container">
    <div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Evalify - Event Scoresheets Management System</h4>
                    </div>
                    <div class="modal-body">
                    <table class="align-middle text-center">
                    <tr>
                                <td colspan="2">Group - 5</td>
                            </tr>
                            <tr>
                                <td><strong>Gabriel Bautista</strong> - Leader</td>
                            </tr>
                            <tr>
                                <td>Danilo De Guzman</td>
                            </tr>
                            <tr>
                                <td>Micaela Cagande</td>
                            </tr>
                            <tr>
                                <td>Aljayve Capara</td>
                            </tr>
                    </table>
                    
                    
           
                    <br />
                    

                        <hr />
                        <p class="text-center text-muted"><button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><strong>Close</strong></button></p>

                    </div>
                </div>
            </div>
        </div>

        
        <form method="POST" action="login.php">
            <br>
            <table cellpadding="10" cellspacing="0" border="0" align="center">
                <thread>
                    <th class="login_user" align="center"><h4>Login</h4></th>
                </thread>

                <tr style="background-color: #b0c7de;">
                    <td>
                    <h5><i class="icon-user"></i>  USERNAME:</h5>
                    <input style="font-size: large; height: 35px !important; text-indent: 7px !important;" class="form-control btn-block" type="text" name="username" placeholder="Username" required="true" autofocus="true" />
 
                    <h5><i class="icon-lock"></i>  PASSWORD:</h5>
                    <input style="font-size: large; height: 35px !important; text-indent: 7px !important;" class="form-control btn-block" type="password"  name="password" placeholder="Password" required="true" autofocus="true" />
                    <br /><br />
             <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                 <button class="btn btn-primary" type="submit"><i class="icon-ok"></i>Login</button>
                 </div>
                    </td>
                </tr>
            </table>
            
         </form>
    </div>
              
   
       
 
    
    <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Evalify 2024</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</div>
</footer>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>
  </body>
</html>


