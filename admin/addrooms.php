        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addrooms.php"><i class=" icon-plus-sign"></i>Add Rooms</a></li>
              <li class="active"><a href="rooms.php"><i class="icon-eye-open"></i>View Rooms</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span5">
                            <form class="form-horizontal">
                            <h2>Add Rooms</h2><br/><br/><br/>
              <div class="control-group">
                <label class="control-label">Room: </label>
                <div class="controls">
                  <input type="text" class="span2" placeholder="Room">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Room Type: </label>
                <div class="controls">
                <select class="span2">
				<option>Lecture</option>
                <option>Laboratory</option>
				</select>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Add Room</button>
                </div>
              </div>
            </form>
                                   
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>