<?php 
include_once 'Crud.php';
$crud = new Crud();
$query = "select * from stock order by stock_catagory";
$stock_list = $crud->getData($query);

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
                    <div class="left_side_content p-2">
                    <h3>Stock</h3>
                    <div class="action_check d-inline-block mt-2">                        
                        <div class="form-group float-left d-inline-block mr-5">
                        <input type="radio" name="a_check" value="Search by Stock" id="stock">
                        <label for="stock">Search by Stock</label>                        
                        </div>
                        <div class="form-group d-inline-block">
                        <input type="radio" name="a_check" value="stock" id="date">
                        <label for="date">Search by Date</label>
                        </div>
                        <div class="src_stck">
                            <div class="form-group">
                                <select name="stock_catagory" id="stock_catagory" class="form-control">
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
                            <p>Select medicine entry date</p>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    </div>                        
                    </div>
                    <div class="col-8 p-2">
                        <h3>Data Display Here</h3>
                        <div class="" id="stock_medicinde"></div>
                    </div>
                </div>
            </div>
            <div class="medicine app">
                <div class="row">
                    <div class="col-4"><h3>Medicine</h3></div>
                    <div class="col-8"></div>
                </div>
            </div>
            <div class="staff app">
                <div class="row">
                    <div class="col-4"><h3>Staff</h3></div>
                    <div class="col-8"></div>
                </div>
            </div>
            <div class="customer app">
                <div class="row">
                    <div class="col-4"><h3>Customer</h3></div>
                    <div class="col-8"></div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){       
        var text;
        $('#stock_catagory').change(function(){
            text = $('#stock_catagory').val();           
            $.ajax({
                url:'medicine_show_stock.php',
                type:'POST',
                data:{stk_name:text},
                success:function(response){
                    $('#stock_medicinde').html(response);
                }
            })
        })

    })
</script>
</body>
</html>
