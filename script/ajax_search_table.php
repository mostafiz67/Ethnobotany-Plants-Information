<?php 
$search_type=$_GET['search_type'];
$search_text=$_GET['search_text'];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<div id="wrapper">
	
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Tree Tables for searching !!!</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <h3> Tree what are you looking ! </h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">Scientific Name of tree. For detail's please click name of the tree</th>
                                            
                                        </tr>
                                    </thead>
									
                                    <tbody>
									<?php
													include('connect.php');

													if($search_text==""){
                                                    $result = mysql_query("SELECT * FROM descriptionoftree WHERE  ".$search_type." order by scientificname ");
															}
                                                            else{
																$result = mysql_query("SELECT * FROM descriptionoftree WHERE  ".$search_type."  LIKE '%".$search_text."%' order by scientificname ");
                                                            }
                                                            $count=mysql_num_rows($result);
                                                            if ($count>0) {

                                                            while($row = mysql_fetch_array($result))
															{
																
																echo '<tr>';
																echo '<td style="text-align:center;" ><a href="details_page.php?id='.$row['id'].'" target="_BLANK">'.$row['scientificname'].'</a></td>';
																echo '</tr>';
																}	
                                                            }
                                                            else{
                                                                echo "<strong><center>No data to display</center></strong>";
                                                            }
										?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			</div>
			</div>

   