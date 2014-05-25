<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	function allContent(){
		for($i=0;$i<10;$i++){
			echo"<div class='col-xs-6'>
        <div class='panel panel-danger'>
            <div class='panel-heading'>
              <h3 class='panel-title'>Menemukan Barang</h3>
            </div>
            <div class='panel-body'>
            	
                <div class='media'>
 					 <a class='pull-left' href='#'>
   					 <img class='media-object' src='1.jpg' width='100' height='100' alt='...'>
  					</a>
  				<div class='media-body'>
    			<h4 class='media-heading'>Ditemukan Sebuah Hulu Botak</h4>
   				 Ciri ciri :
  				</div>
			</div>
              Dilihat :
			  dibuat :
			  <p align='left'><a href='#' class='btn btn-primary  active' role='button'>Detail</a></p>
            </div>
          </div>
        </div>";
		echo"<div class='col-xs-6'>
        <div class='panel panel-warning'>
            <div class='panel-heading'>
              <h3 class='panel-title'>Menemukan Barang</h3>
            </div>
            <div class='panel-body'>
            	
                <div class='media'>
 					 <a class='pull-left' href='#'>
   					 <img class='media-object' src='1.jpg' width='100' height='100' alt='...'>
  					</a>
  				<div class='media-body'>
    			<h4 class='media-heading'>Ditemukan Sebuah Hulu Botak</h4>
   				 Ciri ciri :
  				</div>
			</div>

              Dilihat :
              dibuat :
			  <p align='right'><a href='#' class='btn btn-primary  active' role='button'>Detail</a></p>
            </div>
          </div>
        </div>";
		}
	}
?>

<body>
</body>
</html>