<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data(
    $_POST['nidn'],
    $_POST['nip'],
    $_POST['nama_dsn'],
    $_POST['alamat'],
    $_POST['id_mk']
    );
	header('location: tampil.php');}
    elseif($action=="update")
    {
        $koneksi->update_data(
            $_POST['nidn'],
            $_POST['nip'],
            $_POST['nama_dsn'],
            $_POST['alamat'],
            $_POST['id_mk'],
            $_POST['id_dsn']
);
        header('location: tampil.php');
    }
    elseif($action=="delete")
    {
        $id_dsn = $_GET['id'];
        $koneksi->delete_data($id_dsn);
        header('location: tampil.php');
    }
    ?>