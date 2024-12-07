<?php

class DataDiriController
{
    public function tampilkan()
    {
        // Pastikan file DataDiri.php ada di lokasi yang benar
        $filePath = __DIR__ . '/DataDiri.php';

        if (file_exists($filePath)) {
            include $filePath;
        } else {
            echo "File DataDiri.php tidak ditemukan.";
        }
    }
}

// Contoh penggunaan controller
$controller = new DataDiriController();
$controller->tampilkan();
