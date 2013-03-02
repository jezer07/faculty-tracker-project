        <?php include("header.php");
		
		
		//get all faculties
		$qFaculties = "SELECT name FROM faculties";
		$eFaculties = mysql_query($qFaculties) or die(mysql_error());
		$facultyArray= array();
		while($row = mysql_fetch_array($eFaculties)){
			array_push($facultyArray,$row[0]);
			}		
		
		
		?>
        
             <script>
            
             
             </script>
             
                <div class="span9">
          		 <?php
                 	
				 ?>
                
                <h3>Search by Name</h3><form class="form-search" method="get" action="sname.php">
    <input type="text" class="input-medium search-query" name="name" data-provide="typeahead" data-source='<?php echo json_encode($facultyArray); ?>'>
    <button type="submit" class="btn">Search</button>
    </form>
                <hr/>
                
              <?php 
			  if(isset($_GET["name"])){
				 $name = $_GET["name"];
				 
				 $qSched = "SELECT * FROM faculties where name='$name'";
				 $eSched = mysql_query($qSched);
				 
				 if(mysql_num_rows($eSched)){
					 
					 
					 echo "
					   <table class='table table-striped'>
           	<caption>Marry Adnn Taduyo<caption>
            <thead>
           		<tr>
            		<th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    	
           	   </tr>
            </thead>";
			echo "<tbody>
				  <tr>
			";
			$days= array("M","T","W","TH","F");
					 for($i=0;$i<count($days);$i++){
						$qSched = "SELECT name,sectionid,subjectid,room,day,start,end FROM faculties JOIN schedules ON 		faculties.id = schedules.facultyid WHERE faculties.name = '$name' AND day = '$days[$i]'";
						$eSched = mysql_query($qSched) or die(mysql_error());
						while($row = mysql_fetch_array($eSched)){
							
							echo "
							<td>
							
							
							</td>"	
							
							}//while
						
						
						 
						 }// for loop
					 
          			 echo "</tr>"
		   
		   
		   echo "
		   </tbody>
		   </table>";
					 }
					 else{
						 echo "
						     <div class='alert alert-error'>
							There are no faculty with that name.
							</div>
						 
						 ";
						 
						 }
				 
				  }
			  
			  ?>  
         
           
          			
                    
                    
                    
                    
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>
	   <script>
            $(document).ready(function(){
				
				$("#sname").attr("class","active");
					
				});
             
             </script>