<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logint</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
</head>
<?php
    session_start();
    $error_message='';
    if($_POST){
        include('config/connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = 'SELECT * FROM user WHERE user.email="'. $username .'"AND user.password="'. $password.'"';
        $stmt = $connect->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()>0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];
            $_SESSION['user'] = $user;
            header('location: index.php?page_layout=quantri');
        }else $error_message='Tài khoản hoặc mật khẩu không hợp lệ !';
        
    }
?>
<?php
        if(!empty($error_message)){ ?>
            <h4 ><strong>ERROR:</strong> <?= $error_message ?> </h4>
<?php } ?>

<body> 

<div class="container ">  
    <div class="row justify-content-center">
        <div class="col-md-6">
        
            <h3>Đăng Nhập</h3><br>
            <div class="card">
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập:</label>
                            <input id="username" type="text" class="form-control" name="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu:</label>
                            <input  id="password" type="password" class="form-control" name="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>