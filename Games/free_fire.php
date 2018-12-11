<?php
	
	require_once 'game.php';

	class Free_fire extends Game {

		protected $squad;
		protected $perasut;
		protected $pesawat;
		protected $ranked;
		protected $alarm;

		public function __construct($nama="nama",$versi="versi",$kategori="kategori",$level="level",$kualitas="kualitas",$squad="squad",$perasut="perasut",$pesawat="pesawat",$ranked="ranked",$alarm="alarm")
			{
				parent::__construct($nama,$versi,$kategori,$level,$kualitas);

				$this->squad = $squad;
				$this->perasut = $perasut;
				$this->pesawat = $pesawat;
				$this->ranked    = $ranked;
				$this->alarm = $alarm;
			}
		
			public function Melompat(){
				$Melompat = "Terbang" . parent::MenggunakanKapal() . " Kemudian Melompat";
				return $Melompat;
			}

			public function MembukaPerasut(){
				$tiarap = "Membuka Perasut,Turun Kebawah ";
				return $tiarap;
			}

			public function Berkumpul(){
				$berkumpul = "Pemain harus berkumpul ketika di mode $this->ranked ";
				return $berkumpul;
			}

			public function Berlari(){
				$berlari = "Berlari ke arah zona nyaman ketika $this->alarm berbunyi";
				return $berlari;
			}


			public function MenggunakanSquad(){
				$squad = "Bermain dengan $this->squad akan lebih mempermudah permainan";
				return $squad;
			}

	}
$free_fire = new Free_fire("Teh Nella","di Atas Panggung","","","");

$free_fire2 = new Free_fire("Mengajak Penonton","","","","");

$free_fire3 = new Free_fire("Tapi Masih","Tetap","","","");

$free_fire4 = new Free_fire("BOOOM Dia","Namun Masih","","","");

$free_fire5 = new Free_fire("Tidak Bisa","","","");

?>