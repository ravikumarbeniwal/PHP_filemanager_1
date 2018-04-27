
<html lang="en">

<head>
  
   
</head>

<?php
$deletetime = time()* 86400; # only do this calculation once
$dir = 'temp/';
if ($handle = opendir($dir)) {
  while (false !== ($file = readdir($handle))) {
   if ((filetype("$dir/$file") == 'file')) {
    unlink("$dir/$file");
   }
  }
 closedir($handle);
}

?>

                    

                    


                    
                
               
 <?php 
   include "Elements/Includes/footer.php";
   ?>
 </div>
 </body>

</html>