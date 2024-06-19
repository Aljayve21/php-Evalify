
<?php
include('dbcon.php');



session_start();
if(!isset($_SESSION['id']) || ($_SESSION['id'] == '')) { ?>
<script>
    window.location = 'index.php';
    </script>
<?php
exit();

}

$session_id = $_SESSION['id'];

$session_access = $_SESSION['useraccess'];

$tabname = "";

if($session_access == "Organizer")
{
    $user_query = $conn->query("select * from organizer where organizer_id = '$session_id'");
    $user_row = $user_query->fetch();
}

else
{
    $session_userid=$_SESSION['userid'];
    $user_query = $conn->query("select * from organizer where organizer_id = '$session_id'");
    $user_row = $user_query->fetch();

    $tab_query = $conn->query("select * from organizer where organizer_id = '$session_userid'");
    $tab_row = $tab_query->fetch();
    $tabname = $tab_row['firstname']. " ".$tab_row['lastname'];
}

$name = $user_row['firstname']. " ".$user_row['lastname'];
$check_pass = $user_row['password'];


