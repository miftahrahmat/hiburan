<?php

class Game {
	
	public $nama;
	public $versi;
	public $kategori;
  public $lavel;
	public $kualitas;
  

		public function __construct($nama ="nama",$versi ="versi",$kategori ="kategori",$lavel ="lavel",$kualitas= "kualitas")
		{
			
			$this->nama = $nama;
			$this->versi = $versi;
			$this->kategori = $kategori;
			$this->lavel = $lavel;
      $this->kualitas = $kualitas;
      
		}

   public function Balapan() {
     return " Balapan ";
   }
   public function MenggunakanKapal() {
     return " Menggunakan Kapal";
   }
   public function TembakMenembak() {
     return " Tembak Menembak";
   }
   public function Berpetualang() {
     return " Berpetualang ";
   }
   public function MenyelesaikanTantangan() {
     return " Menyelesaikan Tantangan";
   }

}
 
?>
