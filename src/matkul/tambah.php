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
<body class="h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url('https://static.vecteezy.com/system/resources/previews/000/622/344/original/beautiful-background-of-lines-with-gradients-vector.jpg');">

    <div class="w-full max-w-md p-6 space-y-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            Tambah Matkul
        </h2>
        <form class="space-y-6" method="post" action="proses.php?action=add">
            <div>
                <label for="kode_mk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Matkul:</label>
                <input type="number" name="kode_mk" id="kode_mk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <div>
                <label for="nama_mk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Matkul</label>
                <input type="text" name="nama_mk" id="nama_mk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <div>
                <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS</label>
                <input type="number" name="sks" id="sks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <button type="submit" name="tombol" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
            <div class="text-sm font-medium text-gray-900 dark:text-white">
            <a href="tampil.php" class="text-blue-600 hover:underline dark:text-blue-500"><br>Kembali</a>
            </div>
            
          </form>
    </div>

</body>
</html>