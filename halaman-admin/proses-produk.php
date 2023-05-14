<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM motor WHERE id=?";
   } else {
        $_nama_motor = $_POST['nama_motor'];
        $_cc = $_POST['cc'];
        $_harga = $_POST['harga'];
        $_merk_id = $_POST['merk_id'];
        $_stok = $_POST['stok'];
        $_foto = $_POST['foto'];
        $_deskripsi = $_POST['deskripsi'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_nama_motor;
        $ar_data[]=$_cc;
        $ar_data[]=$_harga;
        $ar_data[]=$_merk_id;
        $ar_data[]=$_stok;
        $ar_data[]=$_foto;
        $ar_data[]=$_deskripsi;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO motor (nama_motor, cc, harga, merk_id, stok, foto, deskripsi) VALUES (?,?,?,?,?,?,?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE motor SET nama_motor=?,cc=?,harga=?,merk_id=?,stok=?,foto=?,deskripsi=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }
   echo '<meta http-equiv="refresh" content="0;url=list-produk.php">'
?>