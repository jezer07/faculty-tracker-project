        <?php include("header.php");?>

              <?php

											
						
						$faculty = $_POST['faculty'];
						$subject = $_POST['subject'];
						$section = $_POST['section'];
						$room = $_POST['room'];
						$day = $_POST['day'];
						$start = $_POST['start'];
						$end = $_POST['end'];
						
				
						
						if(strtotime($end)<=strtotime($start)){
							header("Location:loads.php?error=1");
						exit();
							
							}
							
						$conflict= "SELECT * FROM schedules JOIN faculties on faculties.id=schedules.facultyid WHERE schedules.facultyid='$faculty' AND day='$day' AND (start <='$start' and end >'$start')";
						
						$checkconf= mysql_query($conflict);
						echo mysql_num_rows($checkconf);
						
						
						if(mysql_num_rows($checkconf)>0){
							
							header("Location:loads.php?error=2");
						exit();
							
							}
							echo $conflict;
													
						$q = "Insert into schedules values ('', '$subject', '$section', '$faculty', '$room', '$day', '$start', '$end')";
						$r = @mysql_query($q);
						echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";

	mysql_close();
						?>    
                   
          

        <!-- /container -->
     <?php include("footer.php");?>