        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addusers.php"><i class=" icon-plus-sign"></i>Add Users</a></li>
              <li class="active"><a href="users.php"><i class="icon-eye-open"></i>View Users</a></li>

             
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
                                echo "<form action='updated.php' method='post'>";
                                echo "User ID : " . "<input type=hidden name=user_id value='$row[0]'>$row[0]" . "<br>";
                                echo "Username : " . "<input type=text name=ln value='$row[1]'> <br>";
                                echo "Old Password : " . "<input type=password name=fn value=''> <br>";
								echo "New Password : " . "<input type=password name=fn value=''> <br>";
								echo "Type : " . "<input type=text name=ln value='$row[3]'> <br>";
                                                                
                                echo "<p><input type='submit' name='update' value='Update' /></p>
                                </form>";
                                }

                                        
                                ?></fieldset>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>