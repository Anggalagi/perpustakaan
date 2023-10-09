<?php
session_start();
//------------------------------::::::::::::::::::::------------------------------\\
// Dibuat Angga Aditya 2023 \\
//------------------------------::::::::::::::::::::------------------------------\\
unset($_SESSION['id_user']);
unset($_SESSION['fullname']);
unset($_SESSION['username']);
unset($_SESSION['status']);

$_SESSION['berhasil_keluar'] = "Anda telah berhasil keluar !!";
header("location: ../../masuk");