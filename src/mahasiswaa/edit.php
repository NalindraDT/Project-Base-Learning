<?php 	
include('koneksi.php');
$db = new database();
$id_mhs = $_GET['id'];
if(! is_null($id_mhs))
{
	$data_kelas = $db->get_by_id($id_mhs);
}
else
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi</title>
	<link rel="stylesheet" href="../tailwind.css">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Screen Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url('https://pnc.ac.id/wp-content/uploads/2021/12/IMG_8522-scaled-e1639378595946-1024x660.jpg');">

    <div class="w-full max-w-md p-6 space-y-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            Tambah Mahasiswa
        </h2>
        <form class="space-y-6" method="post" action="proses.php?action=update">
        <input type="hidden" name="id_mhs" value="<?php echo $data_kelas['id_mhs']; ?>"/>
            <div>
                <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPM:</label>
                <input type="text" name="npm" id="npm" value="<?php echo $data_kelas['npm'];?> " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <div>
                <label for="nama_mhs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $data_kelas['nama_mhs'];?> " class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required> <?php echo $data_kelas['alamat']; ?></textarea> 
            </div>
            <button type="submit" name="tombol" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah</button>
            <div class="text-sm font-medium text-gray-900 dark:text-white">
            <a href="tampil.php" class="text-blue-600 hover:underline dark:text-blue-500"><br>Kembali</a>
            </div>
            
          </form>
    </div>

</body>
</html>


