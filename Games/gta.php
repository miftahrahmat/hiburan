<?php
	
	require_once 'game.php';

	class Gta extends Game {

		protected $mission;
		protected $police;
		protected $jetpack;
		protected $tank;
		protected $bengkel;

		public function __construct($nama="nama",$versi="versi",$kategori="kategori",$level="level",$kualitas="kualitas",$mission="mission",$police="police",$jetpack="jetpack",$tank="tank",$bengkel="bengkel")
			{
				parent::__construct($nama,$versi,$kategori,$level,$kualitas);

				$this->mission = $mission;
				$this->police = $police;
				$this->jetpack = $jetpack;
				$this->tank    = $tank;
				$this->bengkel = $bengkel;
			}
		
			public function MenjalankanMissi(){
				$menjalankanmissi = "Menjalankan Missi Membunuh 100 $this->police untuk " . parent::MenyelesaikanTantangan() . "";
				return $menjalankanmissi;
			}

			public function Mengapung(){
				$mengapung = " Mengapung Menggunakn $this->jetpack untuk" . parent::Berpetualang() . "";
				return $mengapung;
			}

			public function MencariPenumpang(){
				$mencaripenumpang = "Mencari Penumpan untuk menyelesaikan missi $this->mission";
				return $mencaripenumpang;
			}

			public function Berperang(){
				$berperang = "Gunakan $this->tank untuk berperang";
				return $berperang;
			}


			public function MemodifMobil(){
				$modif = "Pergi ke Bengkel $this->bengkel untuk Memodif Mobil ";
				return $modif;
			}

	}
$gta = new Gta("","","","","","","POLICE");

$gta2 = new Gta("Mengajak Penonton","","","","");

$gta3 = new Gta("","","","","","TUKANG ANGKOT");

$gta4 = new Gta("BOOOM Dia","Namun Masih","","","");

$gta5 = new Gta("","","","","","","","","","USEP");

?>