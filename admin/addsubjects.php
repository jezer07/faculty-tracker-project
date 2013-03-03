        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="subjects.php"><i class="icon-eye-open"></i>View Subjects</a></li>
              <li class="active"><a href="addsubjects.php"><i class=" icon-plus-sign"></i>Add Subjects</a></li>
              

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                       <div class="span9">
                <fieldset>
    <legend>Add Subjects</legend>
                            <form method="post" class="form-horizontal">
                            
              <div class="control-group">
                <label class="control-label">Subject Code: </label>
                <div class="controls">
                  <input type="text" name="code" class="span2" placeholder="Code">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Subject Description: </label>
                <div class="controls">
                 <input type="text" name="desc" class="span4" placeholder="Description">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                   <button type="submit" name="submit" class="btn btn-primary">Add Subject</button>
                  <button type="reset" class="btn">Clear</button>
                </div>
              </div>
            </form>
            <?php

											
						if (isset($_POST['submit']))
						{
						$code = $_POST['code'];
						$desc = $_POST['desc'];
															
						$query = "Insert into subjects values ('$code','$desc')";
						$result = @mysql_query($query);
						
						echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
						
						mysql_close();
						}
						?>    </fieldset>
        </div>

        <!-- /container -->
     <?php include("footer.php");?>