<?php 
include_once 'Crud.php';
$crud = new Crud();
$stk_name = $_POST['stk_name'];

//$query = "CALL stock_view('$stk_name')";

?>
<table class="table mt-5">
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
    $query = "CALL stock_view('$stk_name')";
    $result = $crud->getData($query); 
    foreach($result as $res){
        echo "<tr>";
        echo "<td>".$res['medicine_id']."</td>";
        echo "<td>".$res['medicine_name']."</td>";        
        echo "<td>".$res['company']."</td>";
        echo "<td>".$res['entry_date']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td class='text-primary'>".$res['stock_catagory']."</td>";
        echo "</tr>"; 
    }      
    ?>
  </tbody>
</table>