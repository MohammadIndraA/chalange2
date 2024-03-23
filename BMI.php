<?php


class BMI {


    private $masa;
    private $tinggi;
    public function inputData($masa, $tinggi) {
        $this->masa = $masa;
        $this->tinggi = $tinggi;
    }

    public function hitungBmi()
    {
       $nilai =  $this->masa / ($this->tinggi * $this->tinggi);
       return number_format($nilai, 2);
       
    }

}

$mbi = new BMI();
$mbi->inputData(78, 1.69);
$nilaimark1 =  $mbi->hitungBmi();
echo " 
    MARK <br><br>
    Masa : 78 <br>
    Tinggi : 1.69 <br>
    mbi : ".$nilaimark1." <br><br><br>
    ";
$mbi->inputData(92, 1.95);
$nilaijhon1 =  $mbi->hitungBmi();
echo " 
    JHON <br><br>
    Masa : 78 <br>
    Tinggi : 1.69 <br>
    mbi : ".$nilaijhon1. "<br><br>
    ";
$hasil = $nilaimark1 > $nilaijhon1 ? "true" : "false";
echo"<b> MARK memiliki nilai BMI lebih tinggi dari John </b> :" . $hasil;
echo"<br>===============================================<br>";
    // 
$mbi->inputData(95, 1.88);
$nilaimark2 =  $mbi->hitungBmi();
echo " 
<br><br> MARK <br><br>
    Masa : 95 <br>
    Tinggi : 1.88 <br>
    mbi : ".$nilaimark2." <br><br><br>
    ";
$mbi->inputData(85, 1.76);
$nilaijohn2 =  $mbi->hitungBmi();
echo " 
    JHON <br><br>
    Masa : 85 <br>
    Tinggi : 1.76 <br>
    mbi : ".$nilaijohn2."<br><br>
    ";
    $hasil2 = $nilaimark2 > $nilaijohn2 ? "true" : "false";
    echo"<b> MARK memiliki nilai BMI lebih tinggi dari John </b> :" . $hasil2;
echo"<br>===============================================<br>";
      

?>