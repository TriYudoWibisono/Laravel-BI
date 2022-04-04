<?php
class Kalkulator{
      
  //method2 yang ada
  public function tambah($angkaPertama,$angkaKedua){
   echo $this->tambah = $angkaPertama + $angkaKedua;
  }
    
  public function Kurang($angkaPertama,$angkaKedua){
   echo $this->kurang = $angkaPertama - $angkaKedua;
  }
    
  public function Kali($angkaPertama,$angkaKedua){
   echo $this->kali = $angkaPertama * $angkaKedua;
  }
    
  public function Bagi($angkaPertama,$angkaKedua){
   echo $this->bagi = $angkaPertama / $angkaKedua;
  }

  public function Daya($angkaPertama,$angkaKedua){
    echo $this->bagi = $angkaPertama * $angkaKedua;
  }
}
 
class KalkulatorHemat extends Kalkulator{  
  public function Daya($angkaPertama,$angkaKedua){
    echo $this->bagi = $angkaPertama * $angkaKedua;
  } 
}   
?>