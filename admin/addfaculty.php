        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addfaculty.php"><i class=" icon-plus-sign"></i>Add Faculty</a></li>
              <li class="active"><a href="faculty.php"><i class="icon-eye-open"></i>View Faculty</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                                     <div class="span5">
                            <form method="post" class="form-horizontal">
                            <h2>Add Faculty</h2><br/><br/><br/>
                      <div class="control-group">
                        <label class="control-label">Faculty ID: </label>
                        <div class="controls">
                          <input type="text" name="id" placeholder="Faculty ID">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Name: </label>
                        <div class="controls">
                          <input type="text" name="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Contact No: </label>
                        <div class="controls">
                          <input type="text" name="contact" placeholder="Contact No.">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Email: </label>
                        <div class="controls">
                          <input type="text" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Username: </label>
                        <div class="controls">
                          <input type="text" name="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Password: </label>
                        <div class="controls">
                          <input type="password" name="pass" placeholder="Password">
                        </div>
                      </div>
                       <div class="control-group">
                        <div class="controls">
                          
                           <button type="submit" name="submit" class="btn btn-primary">Add Faculty </button>
                  <button type="reset" class="btn">Clear</button>
                        </div>
                      </div>
                    </form>
                    <?php

											
						if (isset($_POST['submit']))
						{
						$id = $_POST['id'];
						$name = $_POST['name'];
						$contact = $_POST['contact'];
						$email = $_POST['email'];
						$username = $_POST['username'];
						$password = $_POST['pass'];
						
						$qUser = "Insert into users values ('', '$username', SHA('$password'), 'faculty', NOW())";
						$result = @mysql_query($qUser);
						$rUsers=@mysql_query("select * from users where username='$username'");
                                
                                $row = mysql_fetch_array($rUsers);
                                if ($row)
								{
								$rr= $row[0];
								}
															
						$query = "Insert into faculties values ('$id','$name','$contact','$email','$rr', NOW())";
						$result = @mysql_query($query);
						
						echo "<h1>Faculty Added</h1>";
						echo $query;
						mysql_close();
						}
						?>    
        </div>

        <!-- /container -->
     <?php include("footer.php");?>