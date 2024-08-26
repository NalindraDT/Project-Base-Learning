

<?php include('koneksi.php');

$db = new database();
$data_kelas = $db->tampil_data()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pusat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-no-repeat" style="background-image: url('https://static.vecteezy.com/system/resources/previews/000/622/344/original/beautiful-background-of-lines-with-gradients-vector.jpg');">

<!-- Navbar -->
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://pnc.ac.id/" class="flex items-center space-x-3 rtl:space-x-reverse">
    <img src="https://1.bp.blogspot.com/-1zqGVJ340HU/XJSy4wgCRkI/AAAAAAAAQC0/flSsSZ4v7IssnGCLG4UYFEPzQrnxKpWpwCLcBGAs/s1600/logoPNC.png" class="h-12" alt="Logo PNC" />
    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Politeknik Negeri Cilacap</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="../index.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Halaman Utama</a>
        </li>
        <li>
          <a href="../mahasiswaa/tampil.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Data Mahasiswa</a>
        </li>
        <li>
          <a href="../dosen/tampil.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Dosen/Matkul</a>
        </li>
        <li>
          <a href="../login/logout.php" class="block py-2 px-3 text-red-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:text-white">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Tabel -->
<div class="flex-grow flex justify-center items-start p-16">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full">
    <a href="tambah-data.php"><button class="py-2.5 px-5 mb-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tambah Kelas</button></a>
        <table class="w-4/4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mx-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Kelas</th>
                    <th scope="col" class="px-6 py-3">Tahun Akademik</th>
                    <th scope="col" class="px-6 py-3">Prodi</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            
            <tbody class="bg-white dark:bg-gray-800">
                <?php 
                $no = 1;
                foreach($data_kelas as $row){
                    ?>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4"><?php echo $no++; ?></td>
                        <td class="px-6 py-4"><?php echo $row['nama_kelas']; ?></td>
                        <td class="px-6 py-4"><?php echo $row['thn_akademik']; ?></td>
                        <td class="px-6 py-4"><?php echo $row['nama_prodi']; ?></td>
                        <td class="px-6 py-4 text-right">
                            <a href="edit.php?id=<?php echo $row['id_kls']; ?>" class="text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Edit</a>
                            <a href="proses-tambah.php?action=delete&id=<?php echo $row['id_kls']; ?>" class="text-red-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:text-white">Hapus</a>
                        </td>
                    </tr>
                    <?php
                };
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
