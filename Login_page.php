<!DOCTYPE html>
<html lang="en">
<!-- <head> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>  
</head>
<div class="container container_decor1">
        <div class="row row_style">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                        <div class="text-warning"></div>
                            <form method="POST" action="login.php">
                                <div class="form-group">
                                    <input type="email"  class="form-control" name="Email_id"  placeholder="Email_id" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="Password" placeholder="Password" required = "true" pattern=".{6,}">
                                </div>
                                <button type="submit" class="btn btn-primary ">Login</button>
                            </form>
                            </div>
                    
                
                        
            </div>
        </div>
    </div>