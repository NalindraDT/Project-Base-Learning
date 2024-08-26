<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data(
    $_POST['kode_mk'],
    $_POST['nama_mk'],
    $_POST['sks']
    );
	header('location: tampil.php');}
    elseif($action=="update")
    {
        $koneksi->update_data(
            $_POST['kode_mk'],
            $_POST['nama_mk'],
            $_POST['sks'],
            $_POST['id_mk']);
        header('location: tampil.php');
    }
    elseif($action=="delete")
    {
        $id_mk = $_GET['id'];
        $koneksi->delete_data($id_mk);
        header('location: tampil.php');
    }
    ?>