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
						$conflict2= "SELECT * FROM schedules JOIN faculties on faculties.id=schedules.facultyid WHERE ROOM ='$room' AND day='$day' AND (start <='$start' and end >'$start')";
					
						
						$checkconf= mysql_query($conflict);
						$checkconf2= mysql_query($conflict2);
						if(mysql_num_rows($checkconf)>0){
							
							header("Location:loads.php?error=2");
						exit();
							
							}
						else if(mysql_num_rows($checkconf2)>0){
							
							header("Location:loads.php?error=3");
						exit();
							
							}
					
													
						$q = "Insert into schedules values ('', '$subject', '$section', '$faculty', '$room', '$day', '$start', '$end')";
						$r = @mysql_query($q);
						
						header("location:viewloads.php?success=1");
						
						mysql_close();
						?>    
                   
          

        <!-- /container -->
     <?php include("footer.php");?>