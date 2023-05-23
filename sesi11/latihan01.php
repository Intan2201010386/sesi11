<?php
    $dta["NAMA"] = "Intan";
    $dta["TGL_LAHIR"] = "2004-06-14";
    $dta["JKEL"] = "P";
    $dta["ALAMAT"] = "Badung";
    $dta["HOBI"] = "Membaca Novel";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);