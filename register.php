
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
                                    <h3>Daftar</h3>
                                    <p>Isi Data-data anda dibawah ini :</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" id="signupForm" action="" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Nama</label>
                                        <input type="text" name="name" placeholder="Nama..." class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="no_induk">Nomor induk</label>
                                        <input type="text" name="no_induk" placeholder="Nomor induk..." class=" form-control" id="no_induk">
                                        
                                    </div>
                                    <div class="form-group">
                                        <span>Tanggal Lahir format *(bulan/tanggal/tahun)</span>
                                        <label class="sr-only" for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir..." class=" form-control" id="tgl_lahir">
                                        
                                    </div>
                                    <div class="form-group">
                                        <span>Jenis Kelamin : </span>
                                        <label class="sr-only" for="tgl_lahir">Jenis Kelamin</label>
                                        Laki-laki <input type="radio" name="jk" id="tgl_lahir" value="l" checked>
                                        Perempuan <input type="radio" name="jk"id="tgl_lahir" value="p">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="kelas">Kelas Inti/Awal</label>
                                        <input type="text" name="kelas" placeholder="Kelas Inti/Awal..." class="form-username form-control" id="kelas">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="text" name="email" placeholder="Email..." class="form-control" id="form-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="confirm_password">Confirm Password</label>
                                        <input type="password" name="confirm_password" placeholder="Password seperti diatas..." class="form-control" id="confirm_password">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="hp">No HP</label>
                                        <input type="text" name="hp" placeholder="No HP..." class="form-control" id="hp">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="kontak">Kontak Lain</label>
                                        <p>*gunakan koma untuk pemisah akun Line dan BBM</p>
                                        <input type="text" name="kontak" placeholder="Line,BBM..." class="form-control" id="kontak">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="hobi">Hobi</label>
                                        <input type="text" name="hobi" placeholder="Hobi..." class="form-control" id="hobi">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="alamat_asal">Alamat asal</label>
                                        <textarea name="alamat_asal" placeholder="alamat asal (daerah asal) anda..." class="form-control" id="alamat_asal"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="alamat_sekarang">Alamat sekarang</label>
                                        <textarea name="alamat_sekarang" placeholder="alamat sekarang (alamat kosan,pesantren,dll) anda..." class="form-control" id="alamat_sekarang"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="tentang">tentang Anda</label>
                                        <textarea name="tentang" placeholder="tentang anda..." class="form-control" id="tentang"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="agree">Persetujuan</label>
                                        <input type="checkbox" name="agree" id="agree">
                                        Dengan ini anda setuju membuat akun di website ini.
                                    </div>
                                    <button type="submit" class="btn" name="daftar">Daftar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
<?php
    if(isset($_POST['daftar'])){
        echo $name=mysql_real_escape_string($_POST['name']);
        echo $no_induk=mysql_real_escape_string($_POST['no_induk']);
        echo $tgl_lahir=mysql_real_escape_string($_POST['tgl_lahir']);
        echo $kelas=mysql_real_escape_string($_POST['kelas']);
        echo $alamat_asal=mysql_real_escape_string($_POST['alamat_asal']);
        echo $alamat_sekarang=mysql_real_escape_string($_POST['alamat_sekarang']);
        echo $email=mysql_real_escape_string($_POST['email']);
        echo $password1=mysql_real_escape_string($_POST['password']);
        echo $password=md5($password1); 
        echo $hp=mysql_real_escape_string($_POST['hp']);
        echo $kontak=mysql_real_escape_string($_POST['kontak']);
        echo $hobi=mysql_real_escape_string($_POST['hobi']);
        echo $jk=mysql_real_escape_string($_POST['jk']);
        echo $alamat_asal=mysql_real_escape_string($_POST['alamat_asal']);
        echo $alamat_sekarang=mysql_real_escape_string($_POST['alamat_sekarang']);
        echo $tentang=mysql_real_escape_string($_POST['tentang']);
        $db->newUser($name,$no_induk,$tgl_lahir,$jk,$kelas,$alamat_asal,$alamat_sekarang,$email,$password,$hp,$kontak,$hobi,$tentang);
    }
?>