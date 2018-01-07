<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Bootstrap --> 
    <link href="plugin/css/datepicker.css" rel="stylesheet">
    <script type="text/javascript" src="plugin/js/jquery-1.10.2.min.js"></script> 

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php 
    include"koneksi.php";
    $edit = mysql_query("SELECT * FROM costumer WHERE id='$_GET[id]'");
            $r    = mysql_fetch_array($edit);
    echo"   <center></center>
            <form method=post action=update_costumer.php>";
    ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>

                        <li>
                            <a href="form_daftar_anggota.php"><i class="fa fa-user fa-fw"></i> Pendaftaran Member Baru</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> User & Member<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="view_user.php">Data User</a>
                                </li>
                                <li>
                                    <a href="view_costumer.php">Data Member</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="form_simpanan_anggota.php">Simpan</a>
                                </li>
                                <li>
                                    <a href="form_pinjam_anggota.php">Pinjam</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-print fa-fw"></i> Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="search_simpan.php">Simpan</a>
                                </li>
                                <li>
                                    <a href="search_pinjam.php">Pinjam</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Form Edit Anggota</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <input type=hidden class="form-control" placeholder="ID Member" name=id value='<?php echo $r["id"]; ?>'>
                                        </div>

                                        <div class="form-group">
                                            <label>Kartu Tanda Penduduk</label>
                                            <input class="form-control" placeholder="Kartu Tanda Penduduk" name=ktp value='<?php echo $r["ktp"]; ?>'>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" name=nama value='<?php echo $r["nama"]; ?>' >
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <?php
                                                if($r['jk'] == 'Laki-Laki'){
                                            ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-Laki" checked>Laki-Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Perempuan">Perempuan
                                                </label>
                                            </div>
                                            <?php }
                                                else {
                                            ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" value="Perempuan" checked>Perempuan
                                                </label>
                                            </div>
                                            <?php }
                                            ?>
                                        </div>

                                        <div class="form-group" >
                                            <label>Tempat, Tanggal Lahir</label>
                                            <input class="form-control"  placeholder="Tempat Lahir" name=tmpt_lahir value='<?php echo $r["tmpt_lahir"]; ?>'>
                                            
                                        </div>
                                        <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                                                <input class="form-control"   placeholder="Tanggal Lahir" type="text" name="tgl_lahir" readonly="readonly" value='<?php echo $r["tgl_lahir"]; ?>'>
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Kewarganegaraan</label>
                                            <?php
                                                if($r['wn'] == 'Indonesia'){
                                            ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="wn" value="Indonesia" checked>Warga Negara Indonesia
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="wn" value="Asing">Warga Negara Asing
                                                </label>
                                            </div>

                                            <?php }
                                                else {
                                            ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="wn" value="Indonesia">Warga Negara Indonesia
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="wn" value="Asing" checked>Warga Negara Asing
                                                </label>
                                            </div>
                                            <?php }
                                            ?>
                                        </div>         

                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select class="form-control" name=job value='<?php echo $r["pekerjaan"]; ?>'>
                                                <option>Pegawai Negeri</option>
                                                <option>Pegawai Perusahaan Swasta</option>
                                                <option>Petani</option>
                                                <option>Nelayan</option>
                                                <option>Pengrajin</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3"  name=alamat value='<?php echo $r["alamat"]; ?>'></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" name=email value='<?php echo $r["email"]; ?>'>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telp.</label>
                                            <input class="form-control" placeholder="No Telp" name=notelp value='<?php echo $r["notelp"]; ?>'>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default" name=Kirim value=kirim>Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            
                        </div>
                        <div class="panel-footer">
                        </div>
                 <!-- /.col-lg-4 -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script src="plugin/js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>

</body>

</html>
