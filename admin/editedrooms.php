        <?php include("header.php");?>

              
                <?php
                                   
                                        $room = $_POST['room'];
										$id = $_POST['id'];
										$type = $_POST['type'];
                                       
                                        
                                        $query = "Select * FROM rooms";
                                        $results = @mysql_query($query);
                                        $row = mysql_fetch_array($results);
                                        if ($row)
                                        {
                                        $query = "Update rooms set id='$room', Type='$type' WHERE id='$id'";
                                        mysql_query($query);
                                        header("Location:rooms.php?success=1");
                                        }
                ?>
                   
        <!-- /container -->
     <?php include("footer.php");?>