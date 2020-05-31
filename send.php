<?php
if(isset($_GET['values']) && !empty($_GET['values']))
{
    $showdata = json_decode($_GET['values']);
    echo $showdata -> name;
}


?>