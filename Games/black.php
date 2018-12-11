<?php
	
	require_once 'game.php';

	class Black extends Game {

		protected $mission;
		protected $perasut;
		protected $pesawat;
		protected $helm;
		protected $box_nyawa;

		public function __construct($nama="nama",$versi="versi",$kategori="kategori",$level="level",$kualitas="kualitas",$mission="mission",$perasut="perasut",$pesawat="pesawat",$helm="helm",$box_nyawa="box_nyawa")
			{
				parent::__construct($nama,$versi,$kategori,$level,$kualitas);

				$this->mission = $mission;
				$this->perasut = $perasut;
				$this->pesawat = $pesawat;
				$this->helm    = $helm;
				$this->box_nyawa = $box_nyawa;
			}
		
			public function Melompat(){
				$Melompat = "Terbang" . parent::MenggunakanKapal() . " Kemudian Melompat";
				return $Melompat;
			}

			public function MembukaPerasut(){
				$tiarap = "Membuka Perasut,Turun Kebawah ";
				return $tiarap;
			}

			public function MencariSenjata(){
				$mencarisenjata = "Mencari Senjata diSekeliling";
				return $mencarisenjata;
			}

			public function MendapatkanSenjata(){
				$mendapatkansenjata = "Mendapatkan Senjata,Musuh Datang";
				return $mendapatkansenjata;
			}


			public function Menembak(){
				$menembak = "Terjadilah ". parent::TembakMenembak() ." Antar Pemain";
				return $menembak;
			}

	}
$black = new Black("Teh Nella","di Atas Panggung","","","");

$black2 = new Black("Mengajak Penonton","","","","");

$black3 = new Black("Tapi Masih","Tetap","","","");

$black4 = new Black("BOOOM Dia","Namun Masih","","","");

$black5 = new Black("Tidak Bisa","","","");

?>