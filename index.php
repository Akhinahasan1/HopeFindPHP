<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HopeFind</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/costum.css"/>
<?php include("library.php");?>
</head>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
			<a class="navbar-brand" href="#">HofeFind</a>
         </div>
          <ul class="nav navbar-nav pull-right">
          <li><button type="button" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-user"></span>Masuk</button></li>
          <li><a href="#">Daftar</a></li>
          <li><a href="#">Bantuan</a></li>
        </ul>
         
         <div class="navbar-collapse collapse">                
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Barang Hilang</a></li>
				<li><a href="#">Menemukan Barang</a></li>
			</ul>
          </div>
		</div>
     </div>
</div>

  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Hope Find
            <p class="lead">Cari dan Temukan barang mu di sini !</p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
        	      	<img src="//placehold.it/180x100" class="img-responsive">
                </div>
                <div class="col-sm-6">
	              	<strong>Informasi</strong>
                  	<p>Diberitahukan kepada seluruh member untuk mengganti Password </p>
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div><!-- /cont -->
<!--- Content --->
<div class="container">
	<div class="row"><!---awal-->    
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Cari Data </h3>
            </div>
            <div class="panel-body">
		

            </div>
          </div>
        </div>
      </div>
<div class="jumbotron">
	 <div class="row"><!----kk-->          
        <?php allContent();?>
    </div><!---akhir-->
    <ul class="pagination">
  		<li><a href="#">&laquo;</a></li>
  		<li><a href="#">1</a></li>
  		<li><a href="#">2</a></li>
  		<li><a href="#">3</a></li>
  		<li><a href="#">4</a></li>
  		<li><a href="#">5</a></li>
  		<li><a href="#">&raquo;</a></li>
	</ul>
</div>
</div>


<!--- Footer --->
    <div id="footer">
      <div class="container">
        <p class="text-muted"><center>Copyright © 2014 Hofe Find Indonesia. All Rights Reserved.
Team ATOL</center></p>
      </div>
    </div>


<body>
</body>
</html>>>