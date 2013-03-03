        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
               <li><a href="rooms.php"><i class="icon-eye-open"></i>View Rooms</a></li>
              <li class="active"><a href="addrooms.php"><i class=" icon-plus-sign"></i>Add Rooms</a></li>
             

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span9">
                <fieldset>
    <legend>Add Rooms</legend>
                            <form method="post" class="form-horizontal">
              
              <div class="control-group">
                <label class="control-label">Room: </label>
                <div class="controls">
                  <input type="text" name="room" class="span2" placeholder="Room" required>
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
						
						echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
						
						mysql_close();
						}
						?>             </fieldset>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>