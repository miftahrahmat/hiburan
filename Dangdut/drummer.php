<?php
	
	require_once 'personil.php';

	class Drummer extends Personil {

		protected $stick;

		public function __construct($nama ="nama",$j_kelamin ="j_kelamin",$posisi ="posisi",$keahlian ="keahlian",$email= "email",$stick="stick")
			{
				parent::__construct($nama,$j_kelamin,$posisi,$keahlian,$email);

				$this->stick = $stick;
			}

		
		public function MenggerakanKaki(){

			$menggerakankaki = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Menggerakan Kaki saat " . parent::MainDrum() . " ";
			return $menggerakankaki;
		}

		public function Berdiri(){

			$Berdiri = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Berdiri Ketika " . parent::MainDrum() . "";
			return $Berdiri;
		}

		public function MemutarStick(){

			$MemutarStick = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Memutar Stick Saat " . parent::MainDrum() . "";
			return $MemutarStick;
		}

		public function Berteriak(){

			$berteriak = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Berteriak saat " . parent::MainDrum() . "";
			return $berteriak;
		}

		public function MengangkatTangan(){

			$MengangkatTangan = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Mengangkat tangan ketika selesai " . parent::MainDrum() . "";
			return $MengangkatTangan;
		}
	}
$drummer = new Drummer("Asep Bedog","laki-laki","Drummer","09876543","nela@gmail.com");

$drummer2 = new Drummer("Ujang Kulit","laki-laki","Drummer","09876543","nela@gmail.com");

$drummer3 = new Drummer("Aceng Kaleng","laki-laki","Drummer","09876543","nela@gmail.com");

$drummer4 = new Drummer("Mamat Kepret","laki-laki","Drummer","09876543","nela@gmail.com");

$drummer5 = new Drummer("Udin Bongol","laki-laki","Drummer","09876543","nela@gmail.com");

?>