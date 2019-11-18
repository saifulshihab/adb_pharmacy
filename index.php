<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/app.css" type="text/css">
</head>
<body>
    <div class="container">         
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pharmacy Management System</a>
        </nav>         
        <div class="banner">
        <img src="banner.png" alt="">
        </div>
        <div class="appcontent">
            <div class="stock app">
                <div class="row">
                    <div class="col-4">
                    <div class="left_side_content">
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
                                <select name="stock_name" id="" class="form-control">
                                    <option value="" selected disabled>--Select Stock--</option>
                                    <option value="Liquid">Liquid</option>
                                    <option value="Tablet">Tablet</option>
                                    <option value="Capsules">Capsules</option>
                                    <option value="Drops">Drops</option>
                                    <option value="Inhaler">Inhaler</option>
                                    <option value="Injection">Injection</option>
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
                    <div class="col-8">Data Display Here</div>
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
</body>
</html>
