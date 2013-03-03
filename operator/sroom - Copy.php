        
		
		<?php include("header.php");?>
        
            
             
                <div class="span9">
          		
                <?php $rooms = mysql_query("SELECT * FROM rooms");
				
				?>
                
                <h3>Select room</h3><form class="form-search comboform">
					<select class='combosubmit' name="room">
                 	<?php 
					while($row = mysql_fetch_assoc($rooms)){
						echo "<option value= $row[id]> $row[id]</option>";
						
						}	
					
					?>   
                    
                    
                    </select>
    			
    			</form>
                <hr/>
       
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>
	  <script>
            $(document).ready(function(){
				$("#sroom").attr("class","active");
			
				});
             
             </script>