        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="loads.php"><i class="icon-eye-open"></i>Loads</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span4">
              <?php

											
						
						$faculty = $_POST['faculty'];
						$subject = $_POST['subject'];
						$section = $_POST['section'];
						$room = $_POST['room'];
						$day = $_POST['day'];
						$start = $_POST['start'];
						$end = $_POST['end'];
							
																		
						$q = "Insert into schedules values ('', '$subject', '$section', '$faculty', '$room', '$day', '$start', '$end')";
						$r = @mysql_query($q);
						echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";

	mysql_close();
						?>    
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>