<?php 
if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_k = $_POST['jenis_kelamin'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];

class bmi {
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat;
    public $tinggi;

    public function __construct($nama, $umur, $jenis_k, $berat, $tinggi){
    $this->nama = $nama;
    $this->umur = $umur;
    $this->jenis_kelamin = $jenis_k;
    $this->berat = $berat;
    $this->tinggi = $tinggi;
    }
    public function hasil(){
    $tinggim = $this->tinggi / 100;
    return $hasil = $this->berat / ($tinggim * $tinggim);
    }
    public function status(){
    $hasil = $this->hasil();
    if ($hasil < 18.5){
        echo "Kekurangan Berat"; 
    } elseif ($hasil >= 18.5 && $hasil <= 24.9){
        echo "Normal"; 
    } elseif ($hasil >= 25.0 && $hasil <= 29.9){
        echo "Kelebihan Berat";
    } elseif ($hasil >= 30.0){
        echo "Obesitas";
    } else {
        echo "masukan berat";
    }
    }
}
$person = new bmi($nama, $umur, $jenis_k, $berat, $tinggi);
}
?>