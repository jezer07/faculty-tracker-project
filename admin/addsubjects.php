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
                            <form class="form-horizontal">
                            <h2>Add Subjects</h2><br/><br/><br/>
              <div class="control-group">
                <label class="control-label">Subject Code: </label>
                <div class="controls">
                  <input type="text" class="span2" placeholder="Code">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Subject Description: </label>
                <div class="controls">
                 <input type="text" class="span4" placeholder="Description">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Add Subject</button>
                </div>
              </div>
            </form>
        </div>

        <!-- /container -->
     <?php include("footer.php");?>