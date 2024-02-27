<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Ke Perpustakaan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <?php 
                                        if(isset($_POST['register'])) {
                                            $nama_lengkap = $_POST['nama'];
                                            $username = $_POST['username'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $level = $_POST['level'];
                                            $password = md5($_POST['password']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama_lengkap,username,email,alamat,password,level)VALUES('$nama_lengkap','$username','$email','$alamat','$password','$level')");

                                            if($insert){
                                                echo '<script>alert("Selamat, Register Berhasil. Silahkan Login");location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Maaf, Register Gagal. Ulangi Kembali");</script>';

                                        
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control py-4"  type="text" required name="nama" placeholder="Masukan Nama Lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-4"  type="text" required name="email" placeholder="Masukan email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" required class="form-control "></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >username</label>
                                                <input class="form-control py-4"  type="username" required name="username" placeholder="Masukkan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" required name="password" type="password" placeholder="Masukkan password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >Lavel</label>
                                                <select name="level" class="form select py-4">
                                                <option value="admin">Admin</option>
                                                <option value="Peminjam">Peminjam</option>
                                                </select>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <button class="btn btn-primary-2" type="submit" name="register" value="register">Register</button>
                                                <!-- <a class="btn btn-danger" href="login.php">Login</a> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2024 perpustakaan 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
