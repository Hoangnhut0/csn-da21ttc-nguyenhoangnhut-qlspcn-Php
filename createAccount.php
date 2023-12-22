<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
    $sql_user = "SELECT * FROM user";
    
    
    $query_user = mysqli_query($connect, $sql_user);

    if(isset($_POST['add'])){
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $mail = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `user`(`ho`, `ten`, `email`, `password`) VALUES (N'$ho', N'$ten','$mail','$password')";
        
        $query = mysqli_query($connect, $sql);
        
        header('location: index.php?page_layout=login' );
    }
?>
<body>
<div class="container">  
    <div class="row justify-content-center">
        <div class="col-md-6">
        
            <h3>Đăng Ký</h3><br>
            <div class="card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Họ</label>
                            <input type="text" name="ho" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" name="ten" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-primary" name="add">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>