<?php 
include_once 'Crud.php';
$crud = new Crud();
$query = "select * from staff";
$result = $crud->getData($query);
?>
<table class="med_table table mt-4">
    <thead class="thead-light">
        <tr>
        <th scope="col">Staff ID</th>
        <th scope="col">Staff Name</th>
        <th scope="col">Salary</th>
        <th scope="col">Working Stock</th>                                
        </tr>
    </thead>                      
  <tbody>
    <?php      
    if($result){
    foreach($result as $res){
        echo "<tr>";
        echo "<td>".$res['staff_id']."</td>";
        echo "<td>".$res['staff_name']."</td>";                
        echo "<td>".$res['salary']."</td>";
        echo "<td class='text-primary font-weight-bold'>".$res['stock_id']."</td>";
        echo "</tr>"; 
    }
}else{
    echo "<td class='text-danger'>Error!</td>";
}      
    ?>
  </tbody>
</table>