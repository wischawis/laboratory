<?php
/**
 * Created by PhpStorm.
 * User: WiiS
 * Date: 6/4/2560
 * Time: 2:55
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php
include("../class/Authentication.class.php");
include("../model/getData.php");
$data = getAllProjects();
print_r($data);
session_start();

?>