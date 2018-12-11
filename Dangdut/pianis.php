<?php
	
	require_once 'personil.php';

	class Pianis extends Personil {

		protected $intonasi;

		public function __construct($nama ="nama",$j_kelamin ="j_kelamin",$posisi ="posisi",$keahlian ="keahlian",$email= "email",$intonasi="intonasi")
			{
				parent::__construct($nama,$j_kelamin,$posisi,$keahlian,$email);

				$this->intonasi = $intonasi;
			}	
		
			public function MengangkatTangan(){
				$angkattangan = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Mengangkat Tangan Ketika " . parent::MainPiano() . "";
				return $angkattangan;
			}

			public function Mengangguk(){
				$mengangguk = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Mengangguk-ngangguk ketika " . parent::MainPiano() . "";
				return $mengangguk;
			}

			public function MenggerakanKaki(){
				$menggerakankaki = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Menggerakan Kaki Ketika " . parent::MainPiano() . "";
				return $menggerakankaki;
			}

			public function MenggerakanBadan(){
				$menggerakanbadan = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Menggerakan Badan Ketika " . parent::MainPiano() . "";
				return $menggerakanbadan;
			}


			public function Bernyanyi(){
				$bernyanyi = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Membantu Bernyanyi Ketika " . parent::MainPiano() . "";
				return $bernyanyi;
			}

	}
$pianisi = new Pianis("Dadan Tombol","laki-laki","Pianis","09876543","nela@gmail.com");

$pianisi2 = new Pianis("Asep kampak","laki-laki","Pianis","09876543","nela@gmail.com");

$pianisi3 = new Pianis("Riki Bulog","laki-laki","Pianis","09876543","nela@gmail.com");

$pianisi4 = new Pianis("Udin Cilok","laki-laki","Pianis","09876543","nela@gmail.com");

$pianisi5 = new Pianis("Mamat Pare","laki-laki","Pianis","09876543","nela@gmail.com");

?>