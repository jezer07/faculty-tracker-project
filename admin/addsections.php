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
                          <form class="form-horizontal">
                            <h2>Add Sections</h2><br/><br/><br/>
              <div class="control-group">
                <label class="control-label">Section: </label>
                <div class="controls">
                  <input type="text" class="span2" placeholder="Section">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Add Sections</button>
                </div>
              </div>
            </form>
                
                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>