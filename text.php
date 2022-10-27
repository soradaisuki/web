<html>
   
   <head>
      <title>Lấy thông tin Hệ điều hành trong PHP</title>
   </head>
   <body>
   
       <?php
         echo php_uname()."<br>";  
			echo PHP_OS."<br>";  
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {  
			  echo 'Server đang sử dụng Windows!';  
			} else {  
			  echo 'Đây không phải là Server đang sử dụng Windows!'."<br>";  
			}  
       ?>
       
   </body>
</html>
