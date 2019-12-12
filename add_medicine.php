<?php 

include_once 'Crud.php';
$crud = new Crud();

$mn = $_POST['mn'];
$mc = $_POST['mc'];
$md = $_POST['md'];
$mp = $_POST['mp'];
$ms = $_POST['ms'];
$query = "CALL add_medicine('$mn','$mc','$md','$mp','$ms')";
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
    echo "<td class='text-danger'>Insert error!</td>";
}      
    ?>
  </tbody>
</table>