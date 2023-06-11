<?php
session_start();

session_unset();

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna ke halaman login (misalnya index.php)
header("Location: ./");
exit;

