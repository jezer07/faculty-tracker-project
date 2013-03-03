        <?php include("header.php");?>

              <?php
                                   
                                        $section = $_POST['section'];
										$id = $_POST['id'];
                                       
                                        
                                        $query = "Select * FROM sections";
                                        $results = @mysql_query($query);
                                        $row = mysql_fetch_array($results);
                                        if ($row)
                                        {
                                        $query = "Update sections set id='$section' WHERE id='$id'";
                                        mysql_query($query);
                                        header("Location:sections.php?success=1");
                                        }
                ?>

        <!-- /container -->
     <?php include("footer.php");?>