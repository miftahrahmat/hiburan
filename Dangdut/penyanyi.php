<?php
	
	require_once 'personil.php';

	class Penyanyi extends Personil
	{
		public $logat;
		
			public function __construct($nama = "nama",$j_kelamin = "j_kelamin",$posisi = "posisi",$tlp = "tlp",$email = "email",$logat ="logat")
			{
				parent::__construct($nama,$j_kelamin,$posisi,$tlp,$email);

				$this->logat = $logat;
			}

		public function MinumAir(){

			$minum_air = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Setelah " . parent::Bernyanyi() . " tidak minum air  Logat : $this->logat";
			return $minum_air;
		}

		public function Bergoyang(){

			$bergoyang = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Bergoyang Ketika " . parent::Bernyanyi() . "";
			return $bergoyang;
		}

		public function Melompat(){

			$melompat = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Melompat Saat " . parent::Bernyanyi() . "";
			return $melompat;
		}

		public function Berteriak(){

			$sembelit = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Berteriak saat " . parent::Bernyanyi() . " Logat : $this->logat";
			return $sembelit;
		}

		public function MengangkatTangan(){

			$MengangkatTangan = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Mengangkat tangan ketika selesai " . parent::Bernyanyi() . " Logat : $this->logat";
			return $MengangkatTangan;
		}
	}
$penyanyi = new Penyanyi("Nella Kharisma","Perempuan","Penyayi","09876543","nela@gmail.com","Jawa Medok");

$penyanyi2 = new Penyanyi("Asep Balon","Laki-Laki","Penyayi","09876543","nela@gmail.com","Sunda");

$penyanyi3 = new Penyanyi("Nowella","Perempuan","Penyayi","09876543","nela@gmail.com","Timur Tengah");

$penyanyi4 = new Penyanyi("Ariel Noah","Laki-laki","Penyayi","09876543","nela@gmail.com","BI");

$penyanyi5 = new Penyanyi("Saleem","Laki-laki","Penyayi","09876543","nela@gmail.com","Melayu");

?>