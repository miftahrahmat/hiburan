<?php

class Personil {
	
	public $nama;
	public $j_kelamin;
	public $posisi;
  public $tlp;
	public $email;
  

		public function __construct($nama ="nama",$j_kelamin ="j_kelamin",$posisi ="posisi",$keahlian ="keahlian",$email= "email")
		{
			
			$this->nama = $nama;
			$this->j_kelamin = $j_kelamin;
			$this->posisi = $posisi;
			$this->keahlian = $keahlian;
      $this->email = $email;
      
		}

   public function Bernyanyi() {
     return " Bernyayi";
   }
   public function MainGitar() {
     return " Main Gitar";
   }
   public function MainDrum() {
     return " Main Drum";
   }
   public function MainBass() {
     return " Main Bass";
   }
   public function MainPiano() {
     return " Main Piano";
   }

}
 
?>
