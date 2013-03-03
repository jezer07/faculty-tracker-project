        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addrooms.php"><i class=" icon-plus-sign"></i>Add Rooms</a></li>
              <li class="active"><a href="rooms.php"><i class="icon-eye-open"></i>View Rooms</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                 <div class="span9">
                <fieldset>
    <legend>Edit Rooms</legend>
               <?php
               //edit faculty  
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from rooms where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedrooms.php' method='post' class='form-horizontal'>";
								echo "<input type=hidden name=id value='$row[0]'>";
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Room : </label>";
								echo "<div class='controls'>";
								echo "<input type=text name=room value='$row[0]'> <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Room Type : </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=type value='$row[1]'> <br>";
                               echo "</div></div>";                            
								echo "<div class='control-group'>";
								echo "<div class='controls'>";   
                                echo "<button type='submit' name='submit' class='btn btn-primary'>Update</button></div></div></form>";
                                }

                                        
                                ?></fieldset>
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>