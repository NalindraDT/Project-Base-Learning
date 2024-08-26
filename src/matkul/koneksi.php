<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "perkuliahan";
    var $koneksi = "";
 
    function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
    function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from matkul");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
    }
    function tambah_data($kode_mk,$nama_mk,$sks)
    {
    mysqli_query($this->koneksi,"insert matkul values ('','$kode_mk','$nama_mk','$sks')");
    }
    function get_by_id($id_mk)
	{
		$query = mysqli_query($this->koneksi,"select * from matkul where id_mk='$id_mk'");
		return $query->fetch_array();
	}
	function update_data($kode_mk,$nama_mk,$sks,$id_mk)
	{
		$query = mysqli_query($this->koneksi,"update matkul set kode_mk='$kode_mk',nama_mk='$nama_mk',sks='$sks' where id_mk='$id_mk'");
	}
    function delete_data($id_mk)
	{
		$query = mysqli_query($this->koneksi,"delete from matkul where id_mk='$id_mk'");
	}
    }
?>