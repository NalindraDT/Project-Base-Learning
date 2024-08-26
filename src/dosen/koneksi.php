<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "perkuliahan";
    var $koneksi = "";

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data() {
        $data = mysqli_query($this->koneksi, "SELECT dosen.id_dsn, dosen.nidn, dosen.nip, dosen.nama_dsn, dosen.alamat, matkul.nama_mk FROM dosen JOIN matkul ON dosen.id_mk = matkul.id_mk");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nidn, $nip, $nama_dsn, $alamat, $id_mk) {
        mysqli_query($this->koneksi, "INSERT INTO dosen (nidn, nip, nama_dsn, alamat, id_mk) VALUES ('$nidn', '$nip', '$nama_dsn', '$alamat', '$id_mk')");
    }

    function get_by_id($id_dsn) {
        $query = mysqli_query($this->koneksi, "SELECT * FROM dosen WHERE id_dsn='$id_dsn'");
        return $query->fetch_array();
    }

    function update_data($nidn, $nip, $nama_dsn, $alamat, $id_mk, $id_dsn) {
        $query = mysqli_query($this->koneksi, "UPDATE dosen SET nidn='$nidn', nip='$nip', nama_dsn='$nama_dsn', alamat='$alamat', id_mk='$id_mk' WHERE id_dsn='$id_dsn'");
    }

    function delete_data($id_dsn) {
        $query = mysqli_query($this->koneksi, "DELETE FROM dosen WHERE id_dsn='$id_dsn'");
    }
}
?>
