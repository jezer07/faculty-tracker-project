        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsubjects.php"><i class=" icon-plus-sign"></i>Add Subjects</a></li>
              <li class="active"><a href="subjects.php"><i class="icon-eye-open"></i>View Subjects</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
               <div class="span5">
             <?php
                 
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from subjects where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedsubjects.php' method='post'>";
								echo "<input type='hidden' name='id' value='$row[0]'/>";
                                echo "Subject Code : " . "<input type=text name=code value='$row[0]'> <br>";
                                echo "Subject Description : " . "<input type=text name=desc value='$row[1]'> <br>";
                                                                
                                echo "<p><input type='submit' name='update' value='Update' /></p>
                                </form>";
                                }

                                        
                                ?>
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>