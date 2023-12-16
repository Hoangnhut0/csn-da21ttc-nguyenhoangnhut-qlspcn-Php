
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vertical Sidebar Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    /* Custom Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    #sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 56px;
    }

    #content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>

  
</head>


<body>

<!-- Sidebar Navigation -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Dashboard</h3>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
        <a style="color: #f8f9fa;" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Admin</a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
            <a class="btn" href="">Sản Phẩm</a>;
        </li>
        <li>
            <a style="color: #f8f9fa;" class="btn" href="">Thương hiệu</a>
        </li>
        <li>
            <a style="color: #f8f9fa;" class="btn" href="#">..</a>
        </li>
    </ul>
        </li>
        <li>
            <a style="color: #f8f9fa;" href="#">About</a>
        </li>
        <li>    
            <a style="color: #f8f9fa;" href="#">Trang chủ</a>
        </li>
  </ul>
</nav>


<div id="content">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <script>
        <?php require_once 'danhsach.php' ?>
            
    </script>
  
    </div>
  </nav>
  
</div>
</body>
</html>
