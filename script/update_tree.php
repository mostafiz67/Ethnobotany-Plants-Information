<!DOCTYPE html>
<?php

include 'functions.php';
if(!loogedin())
{
	header ("Location: index.php");
	exit();
}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BEOD Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include 'leftmenu.php';
?>
      <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-16">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                           Update Existing Tree Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                <?php
                                include 'connect.php';
                                if(isset($_GET['act']) && $_GET['act']=='add'){
									$file_name=($_FILES['image']['name']); 
									move_uploaded_file($_FILES["image"]["tmp_name"],"image/$file_name");
                                    $scientific_name=$_POST['scientific_name'];
                                    $duration=$_POST['duration'];
                                    $group=$_POST['group'];
                                    $family=$_POST['family'];
                                    $growth_habit=$_POST['growth_habit'];
                                    $bengali_name=$_POST['bengali_name'];
                                    $english_name=$_POST['english_name'];
                                    $description=$_POST['description'];
									$synonyms=$_POST['synonyms'];
                                    $tribal_name=$_POST['tribal_name'];
									$mode_of_use=$_POST['mode_of_use'];
									$distribution=$_POST['distribution'];
									$id = $_POST['id'];
									
                                       $query=mysql_query("Update  descriptionoftree SET scientificname='$scientific_name',duration='$duration',family='$family',
									   groupname='$group',growthhabit='$growth_habit',banglaname='$bengali_name',english_name='$english_name',description='$description',synonyms='$synonyms',
									   tribalname='$tribal_name',image='$file_name',modeofuse='$mode_of_use',distribution='$distribution' WHERE id = '$id'");
                                    
                                    if ($query) {
                                        # code...
                                        echo '<div class="alert alert-success">
                               Tree update successfully.
                            </div>';
                                    }
                                    else{
                                    echo '<div class="alert alert-danger">
                               Something went wrong please try again.
                            </div>';    
                                    }
                                }
                                ?>
								<?php if(isset($_GET['id'])) {
									include'connect.php';
									$query = mysql_query("SELECT * FROM descriptionoftree WHERE id = $_GET[id]");
									$update = mysql_fetch_assoc($query);
									$photo=$update['image'];
								
								?>
                                    <form role="form" method="post" action="?act=add" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Scientific Name</label>
                                            <input name="scientific_name" class="form-control" value="<?php echo $update['scientificname']?>">
                                        </div>
										<div class="form-group">
                                            <label>Synonyms</label>
                                            <input name="synonyms" class="form-control" value="<?php echo $update['synonyms']?>">
                                        </div>
                                          <div class="form-group">
                                            <label>Duration</label>
                                            <input name="duration" class="form-control" value="<?php echo $update['duration']?>">
                                        </div>
										<div class="form-group">
                                            <label>Family Name</label>
                                            <input  name="family" class="form-control" value="<?php echo $update['family']?>">
                                        </div>
                                             <div class="form-group">
                                            <label>Group</label>
                                            <select name="group" class="form-control" value="<?php echo $update['groupname']?>">
                                                <option value="Monocot">Monocot</option>
                                                <option value="Dicot">Dicot</option>
                                                <option value="Manycot">Manycot</option>
                                         </select>
                                        </div>
										<div class="form-group">
                                            <label>Growth Habit</label>
                                            <input  name="growth_habit" class="form-control" value="<?php echo $update['growthhabit']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Bengali Name</label>
                                            <input  name="bengali_name" class="form-control" value="<?php echo $update['banglaname']?>">
                                        </div>
										<div class="form-group">
                                            <label>Tribal Name</label>
                                            <input  name="tribal_name" class="form-control" value="<?php echo $update['tribalname']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>English Name</label>
                                            <input  name="english_name" class="form-control" value="<?php echo $update['english_name']?>">
                                        </div>
										<div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="8"><?php echo $update['description']?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Mode of use</label>
                                            <textarea name="mode_of_use" class="form-control" rows="4"><?php echo $update['modeofuse']?></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Distribution</label>
                                            <textarea name="distribution" class="form-control" rows="4"><?php echo $update['distribution']?></textarea>
                                        </div>
										
										 <div class="form-group">
                                            <label>Previous Image</label>
												<!------------aita try koro ar db te image type hbe varchar------------->
											<?php echo "<img src='image/$photo' height='100' width='150' alt='no image' />";?> 
										
										
											<?php /*echo"<img  alt='Responsive image' border=\"0\" src=\"image".$update['image']."\" width=\"150\" alt=\"image\" height=\"120\">";*/?>
                                        </div>
										<div class="form-group">
                                            <label>New Image input</label>
                                            <input type="file"name="image">
                                        </div>

										<input type="submit" class="btn btn-lg btn-success btn-block" Value="Update" />
										<input type="hidden" name="id" value="<?php echo $update['id']?>">
                                        </form>
										<?php } ?>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
										</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

 <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
