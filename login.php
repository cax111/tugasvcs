
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Login Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive login form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p>Masukan username atau email dan password :</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" id="signupForm" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="no_induk">No Induk</label>
			                        	<input type="text" name="no_induk" placeholder="No induk..." class="form-username form-control" id="no_induk">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
                                    <!-- <div class="form-group">
                                        <label class="sr-only" for="remember">remember</label>
                                        <input type="checkbox" name="remember" value="remember"> Ingat Saya
			                        </div> -->
                                    <button type="submit" name="ok" class="btn btn-primary btn-xl">Sign in!</button>
			                    </form>
                                <br/>
                                <a href="?page=register">Belum Daftar? Klik disini</a>
                                <br/>
                                <a href="">Lupa Password</a>
		                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if(isset($_POST['ok'])){
            $no_induk=$_POST['no_induk'];
            $password=md5($_POST['password']);
            $login=$db->login($no_induk,$password);
            foreach($login as $data){
                if(!empty($data)){
                    session_start();
                    $_SESSION['no_induk']   = $data['no_induk'];
                    $_SESSION['password']   = $data['password'];
                    $_SESSION['hak_akses']  = $data['hak_akses'];
                    $galeri=$db->user_photo($_SESSION['no_induk']);
                    foreach ($galeri as $photo) {
                        if(empty($photo['foto_profil'])){
                            header('location:../utama/index.php?page=isifoto');
                        }else{
                            header('location:../utama/index.php?page=utama');
                        }
                    }
                }else{
                    echo"username/password salah...";
                    }
                }
            }
        ?>