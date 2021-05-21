<?php
include_once '../../Model/accessoires.php';
include_once '../../Controller/accessoiresC.php';

if (isset($_GET["id"]))
{
$id=$_GET['id'];
 $accessoiresC=new accessoiresC() ;
 $accessoiresC->deletePlantes($id);
 header('location:widgetsacc.php');
}