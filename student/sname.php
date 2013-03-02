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
                
                <h3>Search by Name</h3><form class="form-search">
    <input type="text" class="input-medium search-query" data-items='4' data-provide="typeahead" data-source='<?php echo json_encode($facultyArray); ?>'>
    <button type="submit" class="btn">Search</button>
    </form>
                <hr/>
           <table class="table table-striped">
           	<caption>Marry Adnn Taduyo<caption>
            <thead>
           		<tr>
            		<th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    	
           	   </tr>
            </thead>
            <tbody>
            	<tr>
                	<td>ITC30-304i<br/>7:30-8:30<br/>H-410></td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                    <td>a</td>
                </tr>
            
            </tbody>
            
           
           </table>     
           
          			
                    
                    
                    
                    
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>
	   <script>
            $(document).ready(function(){
				
				$("#sname").attr("class","active");
					
				});
             
             </script>