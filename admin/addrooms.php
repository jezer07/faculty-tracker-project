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
                            <form method="post" class="form-horizontal">
                            <h2>Add Rooms</h2><br/><br/><br/>
              <div class="control-group">
                <label class="control-label">Room: </label>
                <div class="controls">
                  <input type="text" name="room" class="span2" placeholder="Room">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Room Type: </label>
                <div class="controls">
                <select name="type" class="span2">
				<option>Lecture Room</option>
                <option>Laboratory Room</option>
				</select>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" name="submit" class="btn btn-primary">Add Room</button>
                  <button type="reset" class="btn">Clear</button>
                </div>
              </div>
            </form>
                      <?php

											
						if (isset($_POST['submit']))
						{
						$room = $_POST['room'];
						$type = $_POST['type'];
															
						$query = "Insert into rooms values ('$room','$type')";
						$result = @mysql_query($query);
						
						echo "<h1>Room Added</h1>";
						
						mysql_close();
						}
						?>             
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>