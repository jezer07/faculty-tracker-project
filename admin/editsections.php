        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsections.php"><i class=" icon-plus-sign"></i>Add Sections</a></li>
              <li class="active"><a href="sections.php"><i class="icon-eye-open"></i>View Sections</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                 <div class="span9">
                <fieldset>
    <legend>Edit Sections</legend>
              <?php
                 
                                $id=$_GET['id'];
                                $rUsers=@mysql_query("select * from sections where id='$id'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
                                {
                                echo "<form action='editedsections.php' method='post' class='form-horizontal'>";
								echo "<input type='hidden' name='id' value='$row[0]'/>";
								echo "<div class='control-group'>";
								echo "<label class='control-label'>Section: </label>";
								echo "<div class='controls'>";
                                echo "<input type=text name=section value='$row[0]'> <br>";
                                 echo "</div></div>";                            
								echo "<div class='control-group'>";
								echo "<div class='controls'>";   
                                echo "<button type='submit' name='submit' class='btn btn-primary'>Update</button></div></div></form>";
                                }

                                        
                                ?></fieldset>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>