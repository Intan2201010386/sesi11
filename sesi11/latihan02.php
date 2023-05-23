<?php
    $dta[0]["NAMA"] = "Intan";
    $dta[0]["TGL_LAHIR"] = "2004-06-14";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ALAMAT"] = "Badung";
    $dta[0]["HOBI"] = "Membaca Novel";

    $dta[1]["NAMA"] = "Mumul";
    $dta[1]["TGL_LAHIR"] = "2004-04-06";
    $dta[1]["JKEL"] = "P";
    $dta[1]["ALAMAT"] = "Badung";
    $dta[1]["HOBI"] = "Mengolekai Novel";

    $dta[2]["NAMA"] = "Nadya";
    $dta[2]["TGL_LAHIR"] = "2004-04-23";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ALAMAT"] = "Gianyar";
    $dta[2]["HOBI"] = "Healing";

    $dta[3]["NAMA"] = "Eka";
    $dta[3]["TGL_LAHIR"] = "2004-11-21";
    $dta[3]["JKEL"] = "P";
    $dta[3]["ALAMAT"] = "Karangasem";
    $dta[3]["HOBI"] = "Menari";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);