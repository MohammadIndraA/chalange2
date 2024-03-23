<?php

class Senam {

    // senam 1
    public $lumba_lumba = [];
    public $koala = [];
    public $rataLumba;
    public $rataKoala;

    // bonus1

    public $bonus1lumba_lumba = [];
    public $bonus1koala = [];
    public $bonus1ratalumba;
    public $bonus1ratakoata;

    // bonus2
    public $bonus2lumba_lumba = [];
    public $bonus2koala = [];
    public $bonus2ratalumba;
    public $bonus2ratakolata;


    public function nilai_lumba_kumba($lumba_lumba) {
        $this->lumba_lumba = $lumba_lumba;
    }
    public function nilai_koala($koala) {
        $this->koala = $koala;
    }

    public function rata_rata() {
        $this->rataLumba = number_format(array_sum($this->lumba_lumba) / count($this->lumba_lumba), 2);
        $this->rataKoala= number_format(array_sum($this->koala) / count($this->koala), 2);
        echo "DATA 1 <br><br>";
        if ($this->rataLumba >= 100) {
            echo "Tim Lumba (97, 108, 89) = " . ($this->rataLumba)." <br>";
            echo "Tim Koala (89, 91, 110) = " . ($this->rataKoala)." <br>";
            echo "HASIL = Tim Lumba Lumba yang menang tropi";
        } elseif ($this->rataKoala >= 100) {
            echo "Tim Lumba (97, 108, 89) = " . ($this->rataLumba)." <br>";
            echo "Tim Koala (89, 91, 110) = " . ($this->rataKoala)." <br>";
            echo "HASIL = Tim Koala yang menang tropi";
        } elseif($this->lumba_lumba == $this->koala) {
            echo "Tim Lumba (97, 108, 89) = " . ($this->rataLumba)." <br>";
            echo "Tim Koala (89, 91, 110) = " . ($this->rataKoala)." <br>";
            echo "HASIL = Hasil Seri  <br><br><br>";
        }else{
            echo "Tim Lumba (97, 108, 89) = " . ($this->rataLumba)." <br>";
            echo "Tim Koala (89, 91, 110) = " . ($this->rataKoala)." <br>";
            echo "HASIL = Tidak ada tim yang menang tropi <br><br><br>";
        }
    }

    // bonus 1
    public function bonus1_lumba_kumba($bonus1lumba_lumba) {
        $this->bonus1lumba_lumba = $bonus1lumba_lumba;
    }
    public function bonus1_koala($bonus1koala) {
        $this->bonus1koala = $bonus1koala;
    }
    public function bonus1()
    {
        $this->bonus1ratalumba = number_format(array_sum($this->bonus1lumba_lumba) / count($this->bonus1lumba_lumba), 2);
        $this->bonus1ratakoata= number_format(array_sum($this->bonus1koala) / count($this->bonus1koala), 2);
        echo "BONUS 1 <br><br>";
        if ($this->bonus1ratalumba >= 100 & $this->bonus1koala < $this->bonus1lumba_lumba) {
            echo "Tim Lumba (97, 112 , 101) = " . ($this->bonus1ratalumba)." <br>";
            echo "Tim Koala (109, 95, 123) = " . ($this->bonus1ratakoata)." <br>";
            echo "HASIL = Tim Lumba Lumba yang menang tropi";
        }elseif($this->bonus1ratakoata >= 100  & $this->bonus1koala > $this->bonus1lumba_lumba) {
            echo "Tim Lumba (97, 112 , 101) = " . ($this->bonus1ratalumba)." <br>";
            echo "Tim Koala (109, 95, 123) = " . ($this->bonus1ratakoata)." <br>";
            echo "HASIL = Tim Koala yang menang tropi";
        }elseif($this->bonus1lumba_lumba == $this->bonus1ratakoata) {
            echo "Tim Lumba (97, 112 , 101) = " . ($this->bonus1ratalumba)." <br>";
            echo "Tim Koala (109, 95, 123) = " . ($this->bonus1ratakoata)." <br>";
            echo "HASIL = Hasil seri <br><br>";
        }else{
            echo "Tim Lumba (97, 112 , 101) = " . ($this->bonus1ratalumba)." <br>";
            echo "Tim Koala (109, 95, 123) = " . ($this->bonus1ratakoata)." <br>";
            echo "HASIL = Tidak ada tim yang menang tropi <br><br>";
        }
    }

     // bonus 1
     public function bonus2_lumba_kumba($bonus2lumba_lumba) {
        $this->bonus2lumba_lumba = $bonus2lumba_lumba;
    }
    public function bonus2_koala($bonus2koala) {
        $this->bonus2koala = $bonus2koala;
    }
    public function bonus2()
    {
        $this->bonus2ratalumba = number_format(array_sum($this->bonus2lumba_lumba) / count($this->bonus2lumba_lumba), 2);
        $this->bonus2ratakolata= number_format(array_sum($this->bonus2koala) / count($this->bonus2koala), 2);
        echo " <br><br> BONUS 2 <br><br>";
        if ($this->bonus2ratalumba >= 100  & $this->bonus2ratakolata < $this->bonus2ratalumba) {
            echo "Tim Lumba (97, 112, 101) = " . ($this->bonus2ratalumba)." <br>";
            echo "Tim Koala (109, 95, 106) = " . ($this->bonus2ratakolata)." <br>";
            echo "HASIL = Tim Lumba Lumba yang menang tropi";
        } elseif ($this->bonus2ratakolata >= 100 & $this->bonus2ratakolata > $this->bonus2ratalumba) {
            echo "Tim Lumba (97, 112, 101) = " . ($this->bonus2ratalumba)." <br>";
            echo "Tim Koala (109, 95, 106) = " . ($this->bonus2ratakolata)." <br>";
            echo "HASIL = Tim Koala yang menang tropi";
        } elseif($this->bonus2ratalumba == $this->bonus2ratakolata) {
            echo "Tim Lumba (97, 112, 101) = " . ($this->bonus2ratalumba)." <br>";
            echo "Tim Koala (109, 95, 106) = " . ($this->bonus2ratakolata)." <br>";
            echo "HASIL = Hasil SERI";
        }else{
            echo "Tim Lumba (97, 112, 101) = " . ($this->bonus2ratalumba)." <br>";
            echo "Tim Koala (109, 95, 106) = " . ($this->bonus2ratakolata)." <br>";
            echo "HASIL = Tidak ada tim yang menang tropi tropi";
        }
    }
}

$senam = new Senam();
// senam
$senam->nilai_lumba_kumba(array(97, 108, 89));
$senam->nilai_koala(array(89, 91, 110));
$rata_rata = $senam->rata_rata();

// bonus1
$senam->bonus1_lumba_kumba(array(97, 112,101));
$senam->bonus1_koala(array(109, 95, 123));
$senam->bonus1();

// bonus2
$senam->bonus2_lumba_kumba(array(97, 112, 101));
$senam->bonus2_koala(array(109, 95, 106));
$senam->bonus2();

?>