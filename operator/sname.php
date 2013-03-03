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
               <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Search By</li>
              <li id="sname"><a href="sname.php"><i class="icon-user"></i>Faculty name</a></li>
              <li id="sdaytime"><a href="sdaytime.php"><i class="icon-time"></i>Day time</a></li>
              <li id="sroom"><a href="sroom.php"><i class="icon-home"></i>Room</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->

                <div class="span9">
          		 <?php
                 	if(isset($_GET['name'])){
						$getname=$_GET['name'];
						}
					else
					$getname="";	
				 ?>
                
                <h3>Search by Name</h3><form class="form-search" method="get" action="sname.php">
    <input type="text" id="searchname" value="<?php echo $getname?>" class="input-large search-query" name="name" data-provide="typeahead" autocomplete="off" data-source='<?php echo json_encode($facultyArray); ?>'>
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
           	<caption>$_GET[name]</caption>
            <thead>
           		<tr>
            		<th>#</th>
					<th>Section</th>
                    <th>Subject</th>
                    <th>Room</th>
                    <th>Day</th>
                    <th>Time</th>
                    	
           	   </tr>
            </thead>";
			echo "<tbody>
				  
			";	
				$qSched = "SELECT name,sectionid,subjectid,room,day,DATE_FORMAT(start,'%k:%i') as start,DATE_FORMAT(end,'%k:%i')as end FROM faculties JOIN schedules ON faculties.id = schedules.facultyid WHERE faculties.name = '$name' order by start,end asc";
						
						
						$eSched = mysql_query($qSched) or die(mysql_error());
					$ctr=1;
						while($row = mysql_fetch_assoc($eSched)){
							echo "<tr><td>$ctr</td>
							      <td>$row[sectionid]</td>
								  <td>$row[subjectid]</td>
								  <td>$row[room]</td>
								  <td>$row[day]</td>		  
							      <td>$row[start]-$row[end]</td>";
							
							$ctr++;
							}//while
						
						
						
							}
					
					 
          			 echo "</tr>";
		   
		   
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
				 
				  
			  
			  ?>  
         
           
          			
                    
                    
                    
                    
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>
	   <script>
            $(document).ready(function(){
				
				$("#sname").attr("class","active");
					
				});
             
             </script>