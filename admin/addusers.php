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
    <legend>Add Users</legend>
                            <form method="post" class="form-horizontal">
                            
                      <div class="control-group">
                        <label class="control-label">Username</label>
                        <div class="controls">
                          <input type="text" name="name" placeholder="Username">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                          <input type="password" name="pass" placeholder="Password">
                        </div>
                      </div>
                       <div class="control-group">
                        <label class="control-label">Type</label>
                        <div class="controls">
                      <select name="type" class="span2">
                        <option value="admin">Administrartor</option>
                        <option value="operator">Operator</option>
                        <option value="faculty">Faculty</option>
                        <option value="student">Student</option>
                        </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          
                           <button type="submit" name="submit" class="btn btn-primary">Add User</button>
                  <button type="reset" class="btn">Clear</button>
                        </div>
                      </div>
                    </form>
                    <?php

											
						if (isset($_POST['submit']))
						{
						$name = $_POST['name'];
						$pass = $_POST['pass'];
						$type = $_POST['type'];
						
															
						$query = "Insert into users values ('','$name', SHA('$pass'),'$type', NOW())";
						
						$result = @mysql_query($query);
						echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
						
						mysql_close();
						}
						?>    </fieldset>
        </div>

        <!-- /container -->
     <?php include("footer.php");?>