<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

</head>

<body>
    <!-- Muốn lấy giá trị từ form ta phải đặt cho mỗi input một name -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h2 class="text-center">Register</h2>
                <form method="GET" action="register.php"> <!-- Phương thức(method=GET/POST/REQUEST..) và file thực thi -->
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input name='txtName' type="text" class="form-control" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input name='txtEmail' type="email" class="form-control" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input name='txtPass' type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-8">
                            <input name='txtPass2' type="password" class="form-control"  placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input name='btnReg' type="submit" class="btn btn-primary" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>