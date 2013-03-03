        
		
		<?php include("header.php");
        $qFaculties = "SELECT name FROM faculties";
		$eFaculties = mysql_query($qFaculties) or die(mysql_error());
		$facultyArray= array();
		while($row = mysql_fetch_array($eFaculties)){
			array_push($facultyArray,$row[0]);
			}		
			
			 //check if the get is set, if set throw the value to the textbox below
                 	if(isset($_GET['name'])){
						$getname=$_GET['name'];
						}
					else
					$getname="";	
				 ?>
    	      
             
                <div class="span9">           
        
        		
               <h3>Select a faculty</h3><form class="form-search" method="get" action="printfaculty.php" target="_new">
    <input type="text" id="searchname" value="<?php echo $getname?>" class="input-large search-query" name="name" data-provide="typeahead" autocomplete="off" data-source='<?php echo json_encode($facultyArray); ?>'>
    <button type="submit" class="btn"  tar>Print Schedule</button>
    </form>
                <hr/>
                
                
     
                <hr/>
                <?php
                if(isset($_GET['error']) AND $_GET['error']==1){
					
					echo "
					    <div class='alert alert-error'>There is no such faculty or the faculty doesn't have any loads</div>
					 ";
					
					}
				
				?>
                                      
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>
	  <script>
            $(document).ready(function(){
				$("#sdaytime").attr("class","active");
			
				});
             
             </script>