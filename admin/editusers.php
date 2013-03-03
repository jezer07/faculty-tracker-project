        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
               <li class="active"><a href="users.php"><i class="icon-eye-open"></i>View Users</a></li>
              <li><a href="addusers.php"><i class=" icon-plus-sign"></i>Add Users</a></li>
             

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span9">
                <fieldset>
    <legend>Edit Users</legend>
                <?php
                 
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from users where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedusers.php' method='post' class='form-horizontal'>";
								echo "<div class='control-group'>";
								echo "<label class='control-label'>User ID : </label>";
								echo "<div class='controls'>";
                                echo "<input type=hidden name=id value='$row[0]'>$row[0]" . "<br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Username : </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=name value='$row[1]'> <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>New Password : </label>";
								echo "<div class='controls'>";
								echo "<input type=password name=new value=''> <br>";
								echo "</div></div>"; 
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Type : </label>";
								echo "<div class='controls'>";
								echo "<input type=text name=type value='$row[3]'> <br>";
                                 echo "</div></div>";                            
								echo "<div class='control-group'>";
								echo "<div class='controls'>";   
                                echo "<button type='submit' name='submit' class='btn btn-primary'>Update</button></div></div></form>";
                                }

                                        
                                ?></fieldset>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>