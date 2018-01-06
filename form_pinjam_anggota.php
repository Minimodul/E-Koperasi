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

    <script><!--

    function startCalc(){
    interval = setInterval("calc()",1);}
    function calc(){
    one = document.autoSumForm.jmlh_pinjam.value;
    two = document.autoSumForm.tenor.value;
    three = document.autoSumForm.bunga.value;
    document.autoSumForm.angsuran.value = ((one * 1) / (two * 1)+ (three * 1))-(three * 1);}
    function stopCalc(){
    clearInterval(interval);}
    </script>

</head>

<body>
    <?php 
    include"koneksi.php";
    echo"   <center></center>
            <form method=post action=input_pinjam_anggota.php name='autoSumForm'>";
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
                            <h1 class="page-header">Form Peminjaman Uang</h1>
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
                                                <label>ID Member</label>
                                                <select class="form-control" name=id>
                                                    <?php
                                                    $konek = mysqli_connect("localhost","root","","fintech");
                                                    $query = "select * from costumer";
                                                    $hasil = mysqli_query($konek,$query);
                                                    while($data=mysqli_fetch_array($hasil)){
                                                        echo"<option value=$data[id]>$data[id] - $data[nama]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Nominal Pinjaman</label>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                    <input type=text class="form-control" name=jmlh_pinjam size=52 onFocus="startCalc();" onBlur="stopCalc();">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Bunga</label>
                                                <div class="form-group input-group">
                                                    <input type=text class="form-control" name=bunga size=52 onFocus="startCalc();" onBlur="stopCalc();">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Tenor</label>
                                                <select class="form-control" name=tenor onFocus="startCalc();" onBlur="stopCalc();">
                                                    <option value="3">3 Bulan</option>
                                                    <option value="6">6 Bulan</option>
                                                    <option value="9">9 Bulan</option>
                                                    <option value="12">12 Bulan</option>
                                                    <option value="15">15 Bulan</option>
                                                    <option value="18">18 Bulan</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label>Nominal Angsuran</label>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                    <input type=text class="form-control" name=angsuran size=52 onchange='tryNumberFormat(this.form.thirdBox);'>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
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
    </form>
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
