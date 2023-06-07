<?php
include 'fungsi.php';
$jumlah = new Jumlah(10000, 2000);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iKantin Wikrama</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>




<body class = "nama">



<div class="background">

    <nav class="navbar-inverse" role="navigation" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#"><i class=" fa fa-shopping-cart"></i> i Kantin Wikrama</a>


                </div>

                <ul>
  

                <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php"><i class="fa fa-home"></i> Beranda</a>
                            </li>

                            
                            <li><a href="#" data-toggle="modal" data-target="#buy">
                                <i class="fa fa-shopping-cart"></i> Beli</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        


                
        </nav>
        <div class="container" style="margin-top: 50px;">
                <div class=" panel-success">
                    <div class="panel-body bg-primary">
                        <div class="container">
                            <h1><i class="fa fa-shopping-cart"></i> Selamat datang di iKantin Wikrama</h1>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="container">
                            <div class="col-md-10">
                                <h4>Klik disini untuk pembelian <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#buy">
                                    <div class="btn">Beli Sekarang</div>
                            </div>
                        </div>
                    </div>

                </div>

        
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                    <button class="sup">
                        support us
                    </button>


                    <label class="bin">
                    <input type="checkbox">
                    <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z"></path></g></g></svg>
                    </label>
                    <label class="bin">
                    <input type="checkbox">
                    <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z"></path></g></g></svg>
                    </label>
                    <label class="bin">
                    <input type="checkbox">
                    <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z"></path></g></g></svg>
                    </label>
                    <label class="bin">
                    <input type="checkbox">
                    <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z"></path></g></g></svg>
                    </label>
                    <label class="bin">
                    <input type="checkbox">
                    <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z"></path></g></g></svg>
                    </label>

                    <br>
                    <br>
                    <br>

                        <div class="container">
                            <?php
                            if (isset($_POST['check'])) {
                                $jmlpc = $_POST['bakwan'];
                                $jmlbakso = $_POST['bakso'];


                                if ($jmlpc == null) {
                                    $jumlah->getJumlah(0, $jmlbakso);
                                } elseif ($jmlbakso == null) {
                                    $jumlah->getJumlah($jmlpc, 0);

                            
                                

                                
                                } else {
                                    $jumlah->getJumlah($jmlpc, $jmlbakso);
                                }
                                $jumlah->setHarga();
                                $jumlah->cetakStruk();
                            }
                            ?>

                            
                        </div>
                    </div>
                </div>

            </div>


            <div id="logo"></div>



            <div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button>
                            <h4 class="modal-title" id="">Form Pembelian</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-group" action="" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                    <input type="number" class="form-control" name="bakso" id="bakso" placeholder="Masukkan Jumlah bakso Yang Dibeli *" readOnly>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                    <input type="number" class="form-control" name="bakwan" id="bakwan" placeholder="Masukkan Jumlah bakwan Yang Dibeli *" readonly>
                                </div>


                                <div class="modal-footer">
                                    <button type="button" id="btnbakso" onclick="Onlybakso()" class="btn btn-success" style="float:left;">Bakso</button>
                                </div>


                                
                                <button type="button" onclick="exit()" class="button1" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                
                                <button type="submit" class="tombol" name="check"> 
                                <i class="fa fa-check"></i> Cek Total</button>

                                <button type="button" id="btnbakwan" onclick="Onlybakwan()" class="btn btn-success" style="float:left;">Bakwan</button>

                                <button type="button" onclick="Keduanya()" class="btn btn-success" style="float:left;"> Bakwan & Bakso</button>

                            </form>

                        </div>

                    </div>

                </div>
                







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</div>
    

</body>


</html>









<script type="text/javascript">
function Onlybakso() {
document.getElementById("bakso").readOnly = false;
document.getElementById("bakwan").readOnly = true;
document.getElementById("btnbakwan").disabled = true;
document.getElementById("btnbakso").disabled = false;
}

function Onlybakwan() {
document.getElementById("bakso").readOnly = true;
document.getElementById("bakwan").readOnly = false;
document.getElementById("btnbakwan").disabled = false;
document.getElementById("btnbakso").disabled = true;
}

function Keduanya() {
document.getElementById("bakso").readOnly = false;
document.getElementById("bakwan").readOnly = false;
document.getElementById("btnbakwan").disabled = false;
document.getElementById("btnbakso").disabled = false;
}

function exit() {
document.getElementById("bakso").readOnly = true;
document.getElementById("bakwan").readOnly = true;
}
</script>

