                <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsubjects.php"><i class=" icon-plus-sign"></i>Add Subjects</a></li>
              <li class="active"><a href="subjects.php"><i class="icon-eye-open"></i>View Subjects</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
               <div class="span5">
               <?php
                                   
                                        $code = $_POST['code'];
                                        $desc = $_POST['desc'];
                                        
                                        $qSubjects = "Select * FROM subjects";
                                        $rSubjects = @mysql_query($qSubjects);
                                        $row = mysql_fetch_array($rSubjects);
                                        if ($row)
                                        {
                                        $query = "Update subjects set id='$code', subjectdesc='$desc' WHERE id='$code'";
                                        mysql_query($query);
                                        echo "<h2>Record has been updated...</h2>";
                                        }
                ?>
               
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>