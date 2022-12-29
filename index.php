<?php
    require 'connect.php';
    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            if(index($_POST) > 0) {
                echo "<script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
            } else {
                echo "<script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
    <h2>Tambah Data</h2>
    <form action="" method="POST">
        <div class="col-md-5">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <br>
        <div class="col-5">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address">
        </div>
        <br>
        <div class="col-md-5">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select">
              <option selected>Male</option>
              <option>Female</option>
            </select>
        </div>
        <div class="col-md-5">
          <label for="position" class="form-label">Position</label>
          <input type="text" class="form-control" id="position" name="position">
        </div>
        <div class="col-md-5">
          <label for="status" class="form-label">Status</label>
          <select id="status" name="status" class="form-select">
            <option selected>Full Time</option>
            <option>Part Time</option>
          </select>
        </div>
        <br>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
</body>
</html>