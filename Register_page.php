<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="index.css" rel="stylesheet" type="text/css"/>
<body>
    
    <div class="container container_decor1">
        <div class="row row_style">
            <div class="col-xs-6">
    <h1>Register Now</h1>
    <form method="POST" action="registration.php">
        <div class="form-group">
            <input type="text"  class="form-control" name="Name"  placeholder="Name" required= "true" >
        </div>
        <div class="form-group">
            <input type="email"  class="form-control" name="Email"  placeholder="Email" required= "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        </div>
        <div class="form-group">
            <input type="password"  class="form-control" name="Password" placeholder= "Password" required="true" pattern=".{6,}">
        </div>
        <div class="form-group">
            <input type="tel"  class="form-control" name="Mobile"  placeholder="Mobile" required= "true">
        </div>
        <div class="form-group">
            <input type="text"  class="form-control" name="Hobbies"  placeholder="Hobbies" required= "true">
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="Gender" value="Male">Male
    </label>
    <label>
                <input type="radio" name="Gender" value="Female">Female
    </label>
    <label>
                <input type="radio" name="Gender" value="Other">Other
    </label>

        </div>
        <button type="submit" class="btn btn-primary ">Submit</button>
    </form>
    </div>
    </div>
    </div>
</body>
</html>