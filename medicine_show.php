<?php
include_once 'Crud.php';
$crud = new Crud();
$query = "select * from medicine";
$result = $crud->getData($query);
?>
<table class="med_table table mt-4">
  
  <tbody>
    <?php      
    if($result){
    foreach($result as $res){
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
    echo "<td class='text-danger'>No Item Match!</td>";
}      
    ?>
  </tbody>
</table>