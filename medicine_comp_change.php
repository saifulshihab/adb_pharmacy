<?php 
include_once 'Crud.php';
$crud = new Crud();
$mid = $_POST['mid'];
$ncomp = $_POST['ncomp'];
$query = "CALL medicine_change($mid,'$ncomp')";
$result = $crud->execute($query);
if($result){
    echo "<p class='text-success'>Medicine Changed!</p>";
}else{
    echo "<p class='text-danger'>Error!</p>";
}
?>