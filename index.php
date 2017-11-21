<?php
    ob_start();
    include('../class/class-db.php');
    $db = new database;
    $db ->koneksi();
    session_start();
    if(isset($_SESSION['no_induk'])){
        header('location:../utama/index.php');     
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="MesinTik adalah media sosial terbaru, dibuat pada tahun 2015. Website MesinTik ini bukan tentang mesin tik untuk mengetik, melainkan media sosial. ">
        <meta name="author" content="Chakra Bernat Yusuf - MesinTik Owner">
        <title>MesinTik - Media Sosial UIN Teknik Informatika</title>

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"> 
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="../img/logoweb.ico"/>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/creative.css" type="text/css"> 

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script type="text/Javascript">
            
            $.validator.setDefaults({
            });

            $().ready(function() {
                // validate the comment form when it is submitted
            $("#commentForm").validate();

            // validate signup form on keyup and submit
            $("#signupForm").validate({
                rules: {
                    name: "required",
                    kelas: "required",
                    no_induk: {
                        required: true,
                        number : true,
                        minlength: 10
                    },
                    hp: {
                        required: true,
                        number : true,
                        minlength: 10
                    },
                    tgl_lahir: {
                        required: true,
                        date: true
                    },
                    hobi: {
                        required: true,
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    alamat_asal: {
                        required: true,
                        minlength: 6
                    },
                    alamat_sekarang: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },
                    email: {
                        required: true,
                        email: true
                    },/*
                    topic: {
                        required: "#newsletter:checked",
                        minlength: 2
                    },*/
                    agree: "required"
                },
                messages: {
                    name: "Mohon isi nama anda",
                    kelas: "Mohon isi kelas anda",
                    no_induk: {
                        required: "Nomor induk tidak boleh kosong",
                        number : "Nomor induk harus berupa angka",
                        minlength: "Anda yakin telah memasukan No.induk dengan benar ??"
                    },
                    hp: {
                        required: "Nomor hp tidak boleh kosong",
                        number : "Nomor hp harus berupa angka",
                        minlength: "No.hp minimal 10 angka"
                    },
                    hobi: {
                        required: "Hobi tidak boeh kosong"
                    },
                    tgl_lahir: {
                        required: "Tanggal lahir tidak boleh kosong",
                        number : "Masukan dengan format yang benar!"
                    },
                    password: {
                        required: "Mohon isi password anda",
                        minlength: "Password minimal 6 huruf/angka!"
                    },
                    confirm_password: {
                        required: "Mohon isi password anda",
                        minlength: "Password minimal 6 huruf/angka!",
                        equalTo: "Password harus sama seperti diatas!"
                    },
                    alamat_asal: {
                        required: "Mohon isi alamat asal anda",
                        minlength: "Masa alamat pendek banget??"
                    },
                    alamat_sekarang: {
                        required: "Mohon isi alamat sekarang anda",
                        minlength: "Masa alamat pendek banget??"
                    },
                    email: "Mohon isi email anda",
                    agree: "Mohon untuk menyetujui pilihan ini."
                    //topic: "Please select at least 2 topics"
                }
            });
        /*
        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var name = $("#name").val();
            var lastname = $("#lastname").val();
            if (name && lastname && !this.value) {
                this.value = name + "." + lastname;
            }
        });
*/
        /*//code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });*/
    });
    </script>
    </head>

    <body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../../mesintik">MESINTIK</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><?php
                            if(isset($_GET['page'])&&$_GET['page']=='register'){
                                echo"<a href='?page=login'>Login";
                            }else{
                                echo"<a href='?page=register'>Daftar";
                            }
                        ?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <?php
        if(isset($_GET['page']) && $_GET['page']=='login'){
            include"login.php";
        }elseif(isset($_GET['page'])&&$_GET['page']=='register'){
            include"register.php";
        }else{
            include"login.php";
        }
    ?>

        <!-- Javascript
        <script src="assets/js/jquery-1.11.1.min.js"></script> -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>