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

    <title>BEOD</title>

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
                    <div class="col-lg-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                           Add new tree
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                <?php
                                include 'connect.php';
								mysql_query('SET CHARACTER SET utf8');
								mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());
                                if(isset($_GET['act']) && $_GET['act']=='add'){
									$file_name=($_FILES['image']['name']); 
									move_uploaded_file($_FILES["image"]["tmp_name"],"image/$file_name");
                                    $scientific_name=addslashes($_POST['scientific_name']);
                                    $duration=$_POST['duration'];
                                    $group=$_POST['group'];
                                    $family=addslashes($_POST['family']);
                                    $growth_habit=addslashes($_POST['growth_habit']);
                                    $bengali_name=addslashes($_POST['bengali_name']);
                                    $english_name=addslashes($_POST['english_name']);
                                    $description=addslashes($_POST['description']);
									$synonyms=addslashes($_POST['synonyms']);
                                    $tribal_name=addslashes($_POST['tribal_name']);
									$mode_of_use=addslashes($_POST['mode_of_use']);
									$distribution=addslashes($_POST['distribution']);
									$diseas=addslashes($_POST['diseas']);
									
                                       $query=mysql_query("INSERT INTO  descriptionoftree(scientificname,duration,family,groupname,growthhabit,banglaname,english_name,description,synonyms,tribalname,image,modeofuse,distribution,diseas) 
									   VALUES('$scientific_name','$duration','$family','$group','$growth_habit','$bengali_name','$english_name','$description','$synonyms','$tribal_name','$file_name','$mode_of_use','$distribution','$diseas')");
                                    
                                    if ($query) {
                                        # code...
                                        echo '<div class="alert alert-success">
                               Tree added successfully.
                            </div>';
                                    }
                                    else{
                                    echo '<div class="alert alert-danger">
                               Something went wrong please try again.
                            </div>';    
                                    }
                                }
                                ?>
                                    <form role="form" method="post" action="?act=add" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Scientific Name</label>
                                            <input name="scientific_name" class="form-control" required>
                                            <p class="help-block">Example: Abelmoschus esculentus (L.) Moench</p>
                                        </div>
										<div class="form-group">
                                            <label>Synonyms</label>
                                            <input name="synonyms" class="form-control">
                                            <p class="help-block">Example: Hibiscus esculentus L.</p>
                                        </div>
                                          <div class="form-group">
                                            <label>Duration</label>
											<select name="duration" class="form-control">
                                                <option value="Annual">Annual</option>
                                                <option value="Biennial">Biennial</option>
                                                <option value="Perennial">Perennial</option>
                                         </select>
                                        </div>
										<div class="form-group">
                                            <label>Family Name</label>
                                            <input  name="family" class="form-control">
                                            <p class="help-block">Example: Malvaceae - Mallow family</p>
                                        </div>
                                             <div class="form-group">
                                            <label>Group</label>
                                            <select name="group" class="form-control">
                                                <option value="Monocot">Monocot</option>
                                                <option value="Dicot">Dicot</option>
                                                <option value="Fern">Fern</option>
												<option value="Gymnosperm">Gymnosperm</option>
                                         </select>
                                        </div>
										<div class="form-group">
                                            <label>Growth Habit</label>
                                            <input  name="growth_habit" class="form-control">
                                            <p class="help-block">Example: Shrub</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Bengali Name</label>
                                            <input  name="bengali_name" class="form-control">
                                            <p class="help-block">Example: Dheros; Vendi (Chittagong).</p>
                                        </div>
										<div class="form-group">
                                            <label>Tribal Name</label>
                                            <input  name="tribal_name" class="form-control">
                                            <p class="help-block">Example: Clag-long, Lai Long Ma (Murang).</p>
                                        </div>
                                        <div class="form-group">
                                            <label>English Name</label>
                                            <input  name="english_name" class="form-control">
                                            <p class="help-block">Example: Lady's Finger.</p>
                                        </div>
										<div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="8"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Mode of use</label>
                                            <textarea name="mode_of_use" class="form-control" rows="4"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Distribution</label>
                                            <textarea name="distribution" class="form-control" rows="4"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Diseas</label>
                                            <input  name="diseas" class="form-control">
                                            <p class="help-block">Example: Fever.</p>
                                        </div>
										
										 <div class="form-group">
                                            <label>Image input</label>
                                            <input type="file"name="image">
                                        </div>

  <input type="submit" class="btn btn-lg btn-success btn-block" Value="Add" />
                                        </form>
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
