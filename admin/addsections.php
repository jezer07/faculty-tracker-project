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
        
                <div class="span4">
                          <form method="post" class="form-horizontal">
                            <h2>Add Sections</h2><br/><br/><br/>
              <div class="control-group">
                <label class="control-label">Section: </label>
                <div class="controls">
                  <input type="text" name="section" class="span2" placeholder="Section">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                   <button type="submit" name="submit" class="btn btn-primary">Add Section</button>
                  <button type="reset" class="btn">Clear</button>
                </div>
              </div>
            </form>
                <?php

											
						if (isset($_POST['submit']))
						{
						$section = $_POST['section'];
																					
						$query = "Insert into sections values ('$section')";
						$result = @mysql_query($query);
						
						echo "<h1>Section Added</h1>";
						
						mysql_close();
						}
						?>    
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>