<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 20px;"><img src="img/S09-font-black.png" width="250px" height="70px"></a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
            <?php
				$id = $_SESSION['id'];
				$sql = "SELECT * FROM admin WHERE id='$id'";
				$query = mysqli_query($koneksidb,$sql);
				$result = mysqli_fetch_array($query);
				$nama=$result['name'];
				$img=$result['Image'];
			?>
			<li class="ts-account">
				<a href="#">
				<img src="img/<?php echo $img;?>" width="30px" height="30px" padding="0px">&nbsp;
				<?php echo $nama; ?> 
                <span class="fa fa-angle-down"></span>
				</a>
				<ul>
					<li><a href="change-password.php"><i class="fa fa-key pull-right"></i>Ganti Password</a></li>
					<li><a href="profile.php"><i class="fa fa-user pull-right"></i>Profil</a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Keluar</a></li>
				</ul>
			</li>
		</ul>
	</div>
