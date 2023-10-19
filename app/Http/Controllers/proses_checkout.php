<?php
include "connect.php";
$nama_penumpang = (isset($_POST['nama_penumpang'])) ? htmlentities($_POST['nama_penumpang']) : "";
$jumlah_penumpang = (isset($_POST['jumlah_penumpang'])) ? htmlentities($_POST['jumlah_penumpang']) : "";
$tujuan_awal = (isset($_POST['tujuan_awal'])) ? htmlentities($_POST['tujuan_awal']) : "";
$tujuan_akhir = (isset($_POST['tujuan_akhir'])) ? htmlentities($_POST['tujuan_akhir']) : "";
$counter = (isset($_POST['counter'])) ? htmlentities($_POST['counter']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";

if(!empty($_POST['input_checkout_validate'])){
    $query = mysqli_query($conn, "INSERT INTO tb_tiket (nama_penumpang,jumlah_penumpang,tujuan_awal,tujuan_akhir,counter,nohp) values('$nama_penumpang','$jumlah_penumpang','$tujuan_awal','$tujuan_akhir','$counter','$nohp')");
    if($query){
        $message = '<script>alert("Tiket berhasil dipesan");
        window.location="../menu"</script>';
        }else{
        $message = '<script>alert("Tiket gagal dipesan")
        window.location="../menu"</script>';
        }
}echo $message;
?>
