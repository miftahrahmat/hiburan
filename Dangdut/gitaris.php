<?php
	
	require_once 'personil.php';

	class Gitaris extends Personil {

		protected $jml_senar;

		public function __construct($nama ="nama",$j_kelamin ="j_kelamin",$posisi ="posisi",$keahlian ="keahlian",$email= "email",$jml_senar="jml_senar")
			{
				parent::__construct($nama,$j_kelamin,$posisi,$keahlian,$email);

				$this->jml_senar = $jml_senar;
			}
		
		public function SteamGitar(){
				$steamgitar = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Keahlian : Menyeteam gitar Ketika mau " . parent::MainGitar() . "";
				return $steamgitar;
			}

			public function MengangkatTangan(){
				$mengangkattangan = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Mengangkat Tangan Ketika " . parent::MainGitar() . "";
				return $mengangkattangan;
			}

			public function Melompat(){
				$melompat = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Melompat Ketika " . parent::MainGitar() . "";
				return $melompat;
			}

			public function Bernyanyi(){
				$bernyanyi = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Membantu Bernyanyi Ketika " . parent::MainGitar() . "";
				return $bernyanyi;
			}


			public function MuterinGitar(){
				$muteringitar = "Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : Muterin Gitar Ketika " . parent::MainGitar() . "";
				return $muteringitar;
			}

	}
$gitaris = new Gitaris("Shodiq","laki-laki","Gitaris","09876543","nela@gmail.com");

$gitaris2 = new Gitaris("Beno Togel","laki-laki","Gitaris","09876543","nela@gmail.com");

$gitaris3 = new Gitaris("Ujang Ragaji","laki-laki","Gitaris","09876543","nela@gmail.com");

$gitaris4 = new Gitaris("Unem","laki-laki","Gitaris","09876543","nela@gmail.com");

$gitaris5 = new Gitaris("Sadot","laki-laki","Gitaris","09876543","nela@gmail.com");

?>