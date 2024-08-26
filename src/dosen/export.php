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
$sheet->setCellValue('H9', 'NIDN');
$sheet->setCellValue('I9', 'NIP');
$sheet->setCellValue('J9', 'Nama Dosen');
$sheet->setCellValue('K9', 'Alamat');
$sheet->setCellValue('L9', 'Matkul Yang Diampu');

$i = 10; // Memulai dari baris ke-10
$no = 1;

foreach ($data as $row) {
    $sheet->setCellValue('G' . $i, $no++);
    $sheet->setCellValue('H' . $i, $row['nidn']);
    $sheet->setCellValue('I' . $i, $row['nip']);
    $sheet->setCellValue('J' . $i, $row['nama_dsn']);
    $sheet->setCellValue('K' . $i, $row['alamat']);
    $sheet->setCellValue('L' . $i, $row['nama_mk']);
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
header('Content-Disposition: attachment;filename="Report Data Dosen.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output'); // Mengirim file ke output sehingga browser dapat mengunduhnya

exit(); // Pastikan untuk menghentikan eksekusi setelah mengirim file
?>
