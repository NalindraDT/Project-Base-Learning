<?php
include('koneksi.php'); // Pastikan ini meng-include file kelas Database
require '/xampp/htdocs/pbl/vendor/autoload.php'; // Menggunakan __DIR__ untuk jalur yang benar

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Buat instance dari kelas Database
$db = new Database();

// Ambil data dari database
$data = $db->tampil_data();

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('G9', 'No');
$sheet->setCellValue('H9', 'NPM');
$sheet->setCellValue('I9', 'Nama Mahasiswa');
$sheet->setCellValue('J9', 'Alamat');

$i = 10; // Memulai dari baris ke-10
$no = 1;

foreach ($data as $row) {
    $sheet->setCellValue('G' . $i, $no++);
    $sheet->setCellValue('H' . $i, $row['npm']);
    $sheet->setCellValue('I' . $i, $row['nama_mhs']);
    $sheet->setCellValue('J' . $i, $row['alamat']);
    $i++;
}

// Terapkan gaya border pada seluruh data
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$sheet->getStyle('G9:L' . ($i - 1))->applyFromArray($styleArray);

// Set header untuk mendownload file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Report Data Mahasiswa.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output'); // Mengirim file ke output sehingga browser dapat mengunduhnya

exit(); // Pastikan untuk menghentikan eksekusi setelah mengirim file
?>
