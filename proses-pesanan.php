<?php 
require_once './halaman-admin/dbkoneksi.php';
?>
<?php 
   if(isset($_GET['iddel'])){
      $ar_data[]=$_GET['iddel'];// ? 
        $sql = "DELETE FROM pesanan WHERE id=?";
        
   } else if(isset($_POST['proses'])){
        $_nama_pelanggan = $_POST['nama_pelanggan'];
        $_alamat_pelanggan = $_POST['alamat_pelanggan'];
        $_motor_id = $_POST['motor_id'];
        $_quantity = $_POST['quantity'];
        $_proses = $_POST['proses'];

      // array data
        $ar_data[]=$_nama_pelanggan;
        $ar_data[]=$_alamat_pelanggan;
        $ar_data[]=$_motor_id;
        $ar_data[]=$_quantity;

      if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO pesanan (nama_pelanggan,alamat_pelanggan,motor_id,quantity) VALUES (?, ?, ?, ?)";
      }else if($_proses == "Update"){
      $ar_data[]=$_POST['idedit'];// ? 5
      $sql = "UPDATE pesanan SET nama_pelanggan=?, alamat_pelanggan=?, motor_id=?, quantity=? WHERE id=?";
      } 
   }
   
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
    echo "<script>alert('Pesanan Anda Berhasil Disimpan');window.location='form-pesanan.php'</script>";
   }
?>