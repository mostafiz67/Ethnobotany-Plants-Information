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
                           <strong>Add Dictionary Word</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                <?php
                                include 'connect.php';
                                if(isset($_GET['act']) && $_GET['act']=='add'){
									
                                    $dictionary_type=$_POST['dictionary_type'];
                                    $dictionary_word=addslashes($_POST['dictionary_word']);
                                    $word_details=addslashes($_POST['word_details']);
									
                                       $query=mysql_query("INSERT INTO  dictionary(dictionary_type,dictionary_word,word_details) 
									   VALUES('$dictionary_type','$dictionary_word','$word_details')");
                                    
                                    if ($query) {
                                        # code...
                                        echo '<div class="alert alert-success">
                               Dictionary word added successfully.
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
                                            <label>Dictionary Type</label>
											<select name="dictionary_type" class="form-control">
                                                <option value="Botanical">Botanical</option>
                                                <option value="Indigenous">Indigenous</option>
                                                <option value="Pharmacological">Pharmacological</option>
                                         </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dictionary Word</label>
                                            <input name="dictionary_word" class="form-control" required>
                                            <p class="help-block">Example: Abelmoschus esculentus (L.) Moench</p>
                                        </div>
										<div class="form-group">
                                            <label>Word Detail's</label>
                                            <textarea name="word_details" class="form-control" rows="4"></textarea>
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
