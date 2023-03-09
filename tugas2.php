<?php

    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

 //presentase nilai
 $nilai_uts = $uts * 0.3;
 $nilai_uas = $uas * 0.35;
 $nilai_tugas = $tugas * 0.35;

 //total nilai
 $nilai_akhir = $nilai_uts + $nilai_uas + $nilai_tugas;

 // grade
    if($nilai_akhir >= 85){
        $grade = "A";
    } elseif ($nilai_akhir >= 70){
        $grade = "B";
    } elseif ($nilai_akhir >= 56){
        $grade = "C";
    } elseif ($nilai_akhir >= 36){
        $grade = "D";
    } elseif ($nilai_akhir >= 0){
        $grade = "E";
    } elseif ($nilai_akhir <= 0){
        $grade = "I";
    } elseif ($nilai_akhir >= 100){
        $grade = "I";
    }
    
    //print nilai
    echo '<h2><u>Nilai Mahasiswa</u></h2><hr>';
    echo 'Nama Mahasiswa : ' . $nama;
    echo '<br> Mata Kuliah : ' . $matkul;
    echo '<br><br> Nilai UTS : ' . $uts;
    echo '<br> Nilai UAS : ' . $uas;
    echo '<br> Nilai Tugas : '  . $tugas;
    echo '<br><br><b> Nilai Akhir : ' . $nilai_akhir;
    echo '<br><b> Grade : ' . $grade;

    //predikat
    $grade;
    switch ($grade) {
	case 'A':
		echo "<br> Predikat : Sangat Memuaskan";
		break;
	case 'B':
		echo "<br> Predikat : Memuaskan";
		break;
	case 'C':
		echo "<br> Predikat : Cukup";
		break;
	case 'D':
		echo "<br> Predikat : Kurang";
		break;
	case 'E':
		echo "<br> Predikat : Sangat Kurang";
		break;
	default:
		echo "<br> Predikat : Tidak Ada";
		break;
}
    
?>

