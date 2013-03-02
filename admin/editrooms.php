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
        
                <div class="span4">
               <?php
               //edit faculty  
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from rooms where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedrooms.php' method='post'>";
								echo "<input type=hidden name=id value='$row[0]'>";
								echo "Room : " . "<input type=text name=room value='$row[0]'> <br>";
                                echo "Room Type : " . "<input type=text name=type value='$row[1]'> <br>";
                               
                                                                
                                echo "<p><input type='submit' name='update' value='Update' /></p>
                                </form>";
                                }

                                        
                                ?>
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>