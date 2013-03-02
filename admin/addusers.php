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
        
                        <div class="span5">
                            <form class="form-horizontal">
                            <h2>Add Users</h2><br/><br/><br/>
                      <div class="control-group">
                        <label class="control-label">Username</label>
                        <div class="controls">
                          <input type="text" id="inputEmail" placeholder="Username">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                          <input type="password" id="inputPassword" placeholder="Password">
                        </div>
                      </div>
                       <div class="control-group">
                        <label class="control-label">Type</label>
                        <div class="controls">
                      <select class="span2">
                        <option>Administrartor</option>
                        <option>Operator</option>
                        <option>Faculty</option>
                        <option>Student</option>
                        </select>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          
                          <button type="submit" class="btn">Add User</button>
                        </div>
                      </div>
                    </form>
        </div>

        <!-- /container -->
     <?php include("footer.php");?>