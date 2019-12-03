<?php 
include_once 'Crud.php';
$crud = new Crud();
$did = $_POST['did'];
$query = "CALL medicine_delete($did)";
$result = $crud->execute($query);
$query2 = "select * from medicine";
$result2 = $crud->getData($query2);
?>
<table class="med_table table mt-4">
  
  <tbody>
    <?php      
    if($result){
    foreach($result2 as $res){
        echo "<tr>";
        echo "<td>".$res['medicine_id']."</td>";
        echo "<td>".$res['medicine_name']."</td>";        
        echo "<td class='text-success font-weight-bold'>".$res['company']."</td>";
        echo "<td>".$res['entry_date']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td class='text-primary font-weight-bold'>".$res['stock_id']."</td>";
        echo "</tr>"; 
    }
}else{
    echo "<td class='text-danger'>Error!</td>";
}      
    ?>
  </tbody>
</table>