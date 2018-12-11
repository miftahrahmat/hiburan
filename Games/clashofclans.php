<?php
	
	require_once 'game.php';

	class Clash_of_clans extends Game {

		protected $busurx;
		protected $perahu;
		protected $peleton;
		protected $ramuan;
		protected $tanaman;

		public function __construct($nama="nama",$versi="versi",$kategori="kategori",$level="level",$kualitas="kualitas",$busurx="busurx",$perahu="perahu",$peleton="peleton",$ramuan="ramuan",$tanaman="tanaman")
			{
				parent::__construct($nama,$versi,$kategori,$level,$kualitas);

				$this->busurx = $busurx;
				$this->perahu = $perahu;
				$this->peleton = $peleton;
				$this->ramuan    = $ramuan;
				$this->tanaman = $tanaman;
			}
		
		
			public function MembangunPertahanan(){
				$busurx = "Membangun $this->busurx akan mempersulit serangan lawan";
				return $busurx;
			}

			public function MenaikiPerahu(){
				$perahu = "Cobalah ". parent::MenggunakanKapal()." perahu untuk beralih ke mode desa malam ";
				return $perahu;
			}

			public function MenyusunStrategi(){
				$strategi = " Menyusun Strategi $this->peleton khusus untuk menyerang townhall 10";
				return $strategi;
			}

			public function MenggunakanRamuan(){
				$ramuan = "Menggunakan Ramuan $this->ramuan akan mempercepat pembangunan";
				return $ramuan;
			}

			public function MenghapusTanaman(){
				$tanaman = "Menghapus Tanaman $this->tanaman akan menghasilkan permata";
				return $tanaman;
			}

	}
$clash_of_clans = new Clash_of_clans("","","","","","BUSUR X","","","","");

$clash_of_clans2 = new Clash_of_clans("","","","","","","","","","");

$clash_of_clans3 = new Clash_of_clans("","","","","","","","GOWIPE","","");

$clash_of_clans4 = new Clash_of_clans("","","","","","","","","BUILDER","");

$clash_of_clans5 = new Clash_of_clans("","","","","","","","","","KUE ULTAH");

?>