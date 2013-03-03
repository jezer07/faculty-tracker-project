        <?php include("header.php");
		 error_reporting(E_ERROR | E_PARSE);?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li  class="active"><a href="viewloads.php"><i class="icon-eye-open"></i> View Loads</a></li>
              <li><a href="loads.php"><i class="icon-eye-open"></i> Add Loads</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
       
               <div class="span9">
 <fieldset>
    <legend>Users</legend>
    
                <?php
				$success=$_GET['success'];
			   if ($success==1)
			   {
				    echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
				   }
                        $rUsers=@mysql_query("select schedules.id, faculties.name, schedules.sectionid, schedules.subjectid, schedules.room, schedules.day, schedules.start, schedules.end from schedules LEFT JOIN faculties ON schedules.facultyid = faculties.id ");
                                        
                                $i=1;
                                echo "<table class='table table-bordered' id='dt'>";
                                echo "<thead><tr>";
                                echo "<th># </th>";
                                echo "<th>Faculty </th>";
                                echo "<th>Section</th>";
								echo "<th>Subject</th>";
								echo "<th>Room</th>";
								echo "<th>Day</th>";
								echo "<th>Start</th>";
								echo "<th>End</th>";
								echo "<th>Action</th>";
                                echo "</tr></thead><tbody>";
                                        
                                while($row=mysql_fetch_array($rUsers))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
								echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
								echo "<td>$row[4]</td>";
                                echo "<td>$row[5]</td>";
                                echo "<td>$row[6]</td>";
								echo "<td>$row[7]</td>";
								echo "<td><a class='btn' href='deleteloads.php?id=$row[0]'><i class='icon-remove'></i></a></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</tbody></table>";

        ?>
               
               </fieldset>
                           	</div>
        <!-- /container -->
     <?php include("footer.php");?>