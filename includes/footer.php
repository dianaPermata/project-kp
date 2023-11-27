<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT * FROM subscribers WHERE email_sub='$subscriberemail'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql1="INSERT INTO subscribers(email_sub) VALUES('$subscriberemail')";
$lastInsertId=mysqli_query($koneksidb, $sql1);
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
  <div class="container">
    <div class="row">
        <div class="col-md-5 about">
          <h3>Studio 09</h3>
          <p class="text-center mx-auto"]>Studio 09 adalah perusahaan vendor fotografi berpengalaman sejak tahun 2019. Dengan komitmen menggabungkan kreativitas dan profesionalisme untuk memberikan hasil terbaik dalam setiap proyek fotografi.</p>
        </div>
        <div class="col-md-4 menu-link">
          <h6>Akses Cepat</h6>
          <ul class="list-unstyled">
            <li><a href="paket.php">Daftar Paket</a></li>
            <li><a href="gallery.php">Portofolio</a></li>
            <li><a href="contact-us.php">Hubungi Kami</a></li>
            <li><a href="admin/">Admin Login</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6> Informasi Kontak</h6>
          <ul class="list-unstyled location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Jl. Mayjend Panjaitan No.Rt.06/01, Nglandung Tiga, Nglandung, Kec. Geger, Kabupaten Madiun, Jawa Timur 63171</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  <p><a href="mailto:studio09.madiun@gmail.com">studio09.madiun@gmail.com</a></p>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p class="text"> <a href="https://wa.me/6283115372269">+6283115372269</a> </p>
              </li>
            </ul>
        </div>
    </div>
  </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">&copy;|Repost by <a href='https://www.instagram.com/studio09.id/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==' style="color: red;" title='StokCoding.com' target='_blank'>Studio 09</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>