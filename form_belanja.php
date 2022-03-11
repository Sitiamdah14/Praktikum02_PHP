<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="pl-4 bg-warning">
<form method="POST" action="form_belanja.php">
    <div class="row">
    <div class="col-9 pl-5 pr-5">
    <h1 class="text-center pb-4 pt-4 text-danger">Belanja Online</h1>
  <div class="form-group row">
    <label for="customer" class="col-3 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-3">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="pilih_produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="pilih_produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="pilih_produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-3 col-form-label">Jumlah</label> 
    <div class="col-3">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row pb-5">
    <div class="offset-3 col-9">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</div>
<div class="col-3">
  <ul class="list-group">
  <li class="list-group-item list-group-item-primary">Daftar Harga</li>
  <li class="list-group-item">TV : 4.200.000</li>
  <li class="list-group-item">Kulkas : 3.100.000</li>
  <li class="list-group-item">Mesin Cuci : 3.800.000</li>
  <li class="list-group-item list-group-item-primary">Harga Dapat Berubah Setiap Saat</li>
</ul>
</div>
</div>
</form>
<hr class="pb-4"/>


<?php
$nama_customer = isset ($_POST['customer']) ? $_POST['customer'] : '';
$pilih_produk = isset ($_POST['pilih_produk']) ? $_POST['pilih_produk'] : '';
$jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';

function format_rp($rp){
  $hasil = "Rp.".number_format($rp,0,",",".");
  return $hasil;
}

$tv = 42000000;
$kulkas = 3100000;
$mesincuci = 3800000;

if ($pilih_produk == 'TV'){
  $harga = $jumlah * $tv;
}elseif($pilih_produk == 'Kulkas'){
  $harga = $jumlah * $kulkas;
}elseif($pilih_produk == 'Mesin Cuci'){
  $harga = $jumlah * $mesincuci;
}   
    
echo 'Nama Customer : '.$nama_customer;
echo '<br/>Produk Pilihan : '.$pilih_produk;
echo '<br/>Jumlah Beli : '.$jumlah;
echo '<br/>Total Belanja : '.format_rp($harga);

?>
<hr class="pb-5"/>
</div>
</body>
</html>