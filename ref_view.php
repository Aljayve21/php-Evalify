<!DOCTYPE html>
<html lang="en">
   
   <?php
   include('header.php');
   include('session.php');
    ?>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
 
  <div class="container">
    <div class="row">
      <div class="span12">
        <?php
        $s_event_query = $conn->query("SELECT * FROM sub_event WHERE view='activated'") or die(mysql_error());
        while ($s_event_row = $s_event_query->fetch()) {
            $active_sub_event = $s_event_row['subevent_id'];
            $active_main_event = $s_event_row['mainevent_id'];
            
            $event_query = $conn->query("SELECT * FROM main_event WHERE mainevent_id='$active_main_event'") or die(mysql_error());
            while ($event_row = $event_query->fetch()) { ?>
                <center>
                <?php include('doc_header.php'); ?>
                <table>
                    <tr>
                        <td align="center">
                            <h2><?php echo $event_row['event_name']; ?></h2>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <h3>Live View of Result - <?php echo $s_event_row['event_name']; ?></h3>
                        </td>
                    </tr>
                </table>
                </center>
                
                <?php
                $o_result_query = $conn->query("SELECT DISTINCT contestant_id FROM sub_results WHERE mainevent_id='$active_main_event' AND subevent_id='$active_sub_event' ORDER BY contestant_id ASC") or die(mysql_error());
                while ($o_result_row = $o_result_query->fetch()) {
                    $contestant_id = $o_result_row['contestant_id']; ?>
                    
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <?php
                            $cname_query = $conn->query("SELECT * FROM contestants WHERE contestant_id='$contestant_id'") or die(mysql_error());
                            while ($cname_row = $cname_query->fetch()) { ?>
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $cname_row['contestant_ctr'] . "." . $cname_row['fullname']; ?></h3>
                                </div>
                            <?php } ?>
                            
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Judge</th>
                                        <th>Score</th>
                                        <th>Rank</th>
                                    </tr>
                                    <?php
                                    $divz = 0;
                                    $totx_score = 0;
                                    $rank_score = 0;
                                    $tot_score_query = $conn->query("SELECT * FROM sub_results WHERE contestant_id='$contestant_id'") or die(mysql_error());
                                    while ($tot_score_row = $tot_score_query->fetch()) {
                                        $divz += 1;
                                    }

                                    $tot_score_query = $conn->query("SELECT judge_id, total_score, rank FROM sub_results WHERE contestant_id='$contestant_id'") or die(mysql_error());
                                    while ($tot_score_row = $tot_score_query->fetch()) {
                                        $totx_score += (int)$tot_score_row['total_score'];
                                        $rank_score += (int)$tot_score_row['rank'];
                                    ?>
                                        <tr>
                                            <td><?php
                                            $judge_idzz = $tot_score_row['judge_id'];
                                            $jjxx_query = $conn->query("SELECT * FROM judges WHERE judge_id='$judge_idzz'") or die(mysql_error());
                                            while ($jjxx_row = $jjxx_query->fetch()) {
                                                echo $jjxx_row['fullname'];
                                            }
                                            ?></td>
                                            <td><?php echo $tot_score_row['total_score']; ?></td>
                                            <td><?php echo $tot_score_row['rank']; ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td></td>
                                        <td>Ave: <b><?php echo round($totx_score / $divz, 2); ?></b></td>
                                        <td>Sum: <b><?php echo $rank_score; ?></b></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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
