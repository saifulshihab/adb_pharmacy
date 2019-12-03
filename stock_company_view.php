<?php 
include_once 'Crud.php';
$crud = new Crud();
$stk_name = $_POST['stk_name'];
$company = $_POST['company'];
//$query = "CALL stock_view('$stk_name')";

?>
<div class="stock_medicine_table">
<table class="table mt-4">
  <thead class="thead-light">
    <tr>
      <th scope="col">Medicine ID</th>
      <th scope="col">Medincine Name</th>
      <th scope="col">Company</th>
      <th scope="col">Stock Entry Date</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    $query = "CALL stock_company('$stk_name', '$company')";
    $result = $crud->getData($query); 
    if($result){
    foreach($result as $res){
        echo "<tr>";
        echo "<td>".$res['medicine_id']."</td>";
        echo "<td>".$res['medicine_name']."</td>";        
        echo "<td class='text-success font-weight-bold'>".$res['company']."</td>";
        echo "<td>".$res['entry_date']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td class='text-primary font-weight-bold'>".$res['stock_catagory']."</td>";
        echo "</tr>"; 
    }
}else{
    echo "<td class='text-danger'>No Item Match!</td>";
}      
    ?>
  </tbody>
</table>
</div>