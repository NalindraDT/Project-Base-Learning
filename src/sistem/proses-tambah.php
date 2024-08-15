<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data(
    $_POST['nama_kelas'],
    $_POST['thn_akademik'],
    $_POST['id_prodi']
    );
	header('location: tampil.php');}
    elseif($action=="update")
    {
        $koneksi->update_data(
            $_POST['nama_kelas'],
            $_POST['thn_akademik'],
            $_POST['id_prodi'],
            $_POST['id_kls']);
        header('location: tampil.php');
    }
    elseif($action=="delete")
{
	$id_kls = $_GET['id'];
	$koneksi->delete_data($id_kls);
	header('location: tampil.php');
}

?>