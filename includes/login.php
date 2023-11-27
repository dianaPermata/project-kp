<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM member WHERE email='$email' AND password='$password'";
    $query = mysqli_query($koneksidb, $sql);
    $results = mysqli_fetch_array($query);
    $currentpage = $_SERVER['REQUEST_URI'];
    if (mysqli_num_rows($query) > 0) {

        if ($results['is_verified'] == 1 && $results['password'] == $password) {
            $_SESSION['ulogin'] = $_POST['email'];
            $_SESSION['fname'] = $results['nama_user'];

            echo "<script>
                    alert('Login Berhasil. Selamat datang, " . $_SESSION['fname'] . "');
                    window.location.href = '$currentpage';
                  </script>";
        } elseif ($results['status_verifikasi'] == 0) {
            echo "<script>
                    alert('Akun belum diverifikasi. Silahkan periksa email Anda untuk melakukan verifikasi.');
                  </script>";
        } else {
            echo "<script>
                    alert('Email atau Password Salah!');
                  </script>";
        }
    } else {
        echo "<script>
                alert('Email atau Password Salah!');
              </script>";
    }
}
?>


<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Alamat Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">            
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Belum punya akun? <a href="regist.php">Daftar Disini</a></p>
        <br><center><p> <a href='https://www.instagram.com/studio09.id/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==' title='StokCoding.com' target='_blank'>Studio 09</a></p></center>
        
      </div>
    </div>
  </div>
</div>