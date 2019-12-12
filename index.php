<?php 
include_once 'Crud.php';
$crud = new Crud();
$query = "select * from stock order by stock_catagory";
$stock_list = $crud->getData($query);
$query2 = "select * from medicine order by company";
$company_list = $crud->getData($query2);
$query3 = "select * from staff";
$staff_result = $crud->getData($query3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/app.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" 
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">         
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pharmacy Management System</a>
        </nav>         
        <div class="banner">
        <img src="images/banner.png" alt="">
        </div>
        <div class="appcontent">
            <div class="stock app p-2">
                <div class="row">
                    <div class="col-4">
                    <div class="left_side_content">
                    <h3 class="h_3">Stock</h3>
                    <div class="action_check d-inline-block mt-2">                        
                        <!-- <div class="form-group float-left d-inline-block mr-5">
                        <input type="radio" name="a_check" value="Search by Stock" id="stock">
                        <label for="stock">Search by Stock</label>                        
                        </div>
                        <div class="form-group d-inline-block">
                        <input type="radio" name="a_check" value="stock" id="date">
                        <label for="date">Search by Date</label>
                        </div> -->
                        <div class="src_stck mt-3">
                            <p>Search by Stock</p>
                            <div class="form-group">
                                <select name="stock_catagory" id="stock_catagory" class="input_width form-control">
                                    <option value=""selected disabled>-- Select Stock --</option>
                                    <?php
                                    foreach ($stock_list as $st){
                                        echo "<option>".$st['stock_catagory']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="src_date">
                        <p>Search by Company</p>
                            <div class="form-group">
                                <select name="company" id="company_select" class="input_width form-control">
                                    <option value=""selected disabled>-- Select Company --</option>
                                    <?php
                                    foreach ($company_list as $com){
                                        if ($com['company']==get['company']){
                                        break;
                                        }
                                        else{
                                            echo "<option>".$com['company']."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>                        
                    </div>
                    <div class="col-8">
                        <h3 class="h_3">Stock Data</h3>
                        <div class="" id="stock_medicinde"></div>
                    </div>
                </div>
            </div>
            <div class="medicine app p-2">
                <div class="row">
                    <div class="col-4">
                        <h3 class="h_3">Medicine</h3>
                        <div class="d-inline-block mt-2">
                            <button class="input_width btn btn-sm btn-outline-success" id="show_medicine">Show Medicine List</button>
                            <div class="mt-2 d-inline-block">
                                <p class="mt-4">Medicine Company Change</p>
                                <div class="form-group" style="margin-top:-12px">
                                    <select name="m_id" id="m_id" class="input_width form-control">
                                        <option value=""disabled selected>-- Select Medicine ID --</option>
                                        <?php
                                        $mid = "select * from medicine";
                                        $result = $crud->getData($mid);                                        
                                        foreach($result as $res){
                                            echo "<option>".$res['medicine_id']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="input_width form-control" name="new_company" id="new_company" placeholder="New Company" >
                                </div>
                                <input type="button" id="mchange" class="input_width btn btn-sm btn-outline-warning" value="Change">
                                <p class="mt-4">Medicine Delete</p>
                            <div class="form-group" style="margin-top:-12px">
                                <input type="text" class="input_width form-control" id="delete_id" placeholder="Type delete id" >
                            </div>
                            <input type="button" id="m_del" class="input_width btn btn-sm btn-outline-danger" value="Delete">

                            <p class="mt-4">Add Medicine</p>
                            <div class="input-group" style="margin-top:-12px">
                                <input type="text" class=" form-control" placeholder="Medicine name" id="mname">                                
                                <select name="mcom" id="mcom" class="form-control">
                                <option value=""selected disabled>-- Select Company --</option>
                                    <?php
                                    foreach ($company_list as $com){
                                        if ($com['company']==get['company']){
                                        break;
                                        }
                                        else{
                                            echo "<option>".$com['company']."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                </div>
                                <div class="input-group">
                                <input type="text" class="form-control" id="mdate" placeholder="Entry date">
                                <input type="number" class="form-control" placeholder="Price" id="mprice">
                                </div>
                                <div class="input-group">
                                <input type="number" class="form-control" placeholder="Stock number" id="mstock">
                                </div>
                            </div>
                            <input type="button" id="add_m" class="mt-3 input_width btn btn-sm btn-outline-secondary" value="Add Medicine">
                        </div>
                    </div>
                    <div class="col-8">
                    <h3 class="h_3">Medicine Data</h3>
                            <table class="table">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">Medicine ID</th>
                                <th scope="col">Medincine Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Stock Entry Date</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock ID</th>
                                </tr>
                            </thead>
                            </table>
                        <div id="medicine_list_show"></div>
                    </div>
                </div>
            </div>
            <div class="staff app p-2">
                <div class="row">
                    <div class="col-4">
                        <h3 class="h_3">Staff</h3>
                        <div class="mt-2 d-inline-block">
                            <button class="btn btn-sm input_width btn-outline-primary w-100" id="show_staff">Show Staff</button>
                            <p class="mt-5">Change Staff Salary</p>
                            <div class="form-group mt-3">
                                <select name="" id="staff_id" class="form-control input_width">
                                    <option value=""selected disabled>-- Select Staff ID --</option>
                                    <?php 
                                        foreach($staff_result as $res){
                                            echo "<option>".$res['staff_id']."</option>"; 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3 class="h_3">Staff Data</h3>                        
                        <div id="staff_list_show"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="customer app p-2">
                <div class="row">
                    <div class="col-4"><h3>Customer</h3></div>
                    <div class="col-8"></div>
                </div>
            </div> -->
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){       
        var stock, company;
        $('#stock_catagory').change(function(){
            stock = $('#stock_catagory').val();           
            $.ajax({
                url:'medicine_show_stock.php',
                type:'POST',
                data:{stk_name:stock},
                success:function(response){
                    $('#stock_medicinde').html(response);
                }
            })
        })

        $('#company_select').change(function(){
            company  = $('#company_select').val();
            $.ajax({
                url:'stock_company_view.php',
                type:'POST',
                data:{stk_name:stock, company:company},
                success:function(response){
                    $('#stock_medicinde').html(response);
                }
            })
        })
        $('#show_medicine').click(function(){
            $.ajax({
                url:'medicine_show.php',
                type:'GET',
                //data:{id:id},
                success:function(response){
                    $('#medicine_list_show').html(response);
                }
            })
        })
        $('#mchange').click(function(){            
            var id = $('#m_id').val();
            var comp = $('#new_company').val();
            $.ajax({                
                url:'medicine_comp_change.php',
                type:'POST',
                data:{mid:id, ncomp:comp},
                success:function(response){
                    $('#medicine_list_show').html(response);
                    $('#m_id').val()="";
                    $('#new_company').val()="";
                }
            })
        })
        $('#m_del').click(function(){
            var id = $('#delete_id').val();
            $.ajax({
                url:'medicine_delete.php',
                type:'POST',
                data:{did:id},
                success:function(response){
                    $('#medicine_list_show').html(response);
                }
            })
        })
        $('#show_staff').click(function(){
            $.ajax({
                url:'staff_list_show.php',
                type:'GET',                
                success:function(response){
                    $('#staff_list_show').html(response);
                }
            })
        })
        $('#staff_id').change(function(){
            var sid = $('#staff_id').val();
            $.ajax({
                url:'salary_change.php',
                type:'POST',
                data:{sid:sid},
                success:function(response){
                    $('#staff_list_show').html(response);
                }
            })
        })
        $('#add_m').click(function(){
            var mn = $('#mname').val();
            var mc = $('#mcom').val();
            var md = $('#mdate').val();
            var mp = $('#mprice').val();
            var ms = $('#mstock').val();
            $.ajax({
                url:'add_medicine.php',
                type:'POST',
                data:{mn:mn, mc:mc, md:md, mp:mp, ms:ms},
                success:function(response){
                    $('#medicine_list_show').html(response);
                }
            })
        })

    })
</script>
</body>
</html>
