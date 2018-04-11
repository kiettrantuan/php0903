<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <!-- Muốn lấy giá trị từ form ta phải đặt cho mỗi input một name -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h2 class="text-center">Upload File</h2>
                <form method="POST" action="upload2.php" enctype="multipart/form-data"> 
                <!-- Phương thức với upload file phải là POST vì GET bị giới hạn -->
                <!-- Để upload được file ta phải thêm enctype="..." -->
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File input</label>
                        <!-- Để upload được nhiều file ta phải có thuộc tính multiple và name là một mảng để quản lý -->
                        <input name="image[]" multiple type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input name='btnReg' type="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>