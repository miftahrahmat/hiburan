<?php
	
	require_once 'personil.php';

	class Bassis extends Personil {

		protected $jml_senar;

		public function __construct($nama ="nama",$j_kelamin ="j_kelamin",$posisi ="posisi",$keahlian ="keahlian",$email= "email",$jml_senar="jml_senar")
			{
				parent::__construct($nama,$j_kelamin,$posisi,$keahlian,$email);

				$this->jml_senar = $jml_senar;
			}
		
		
			public function SerongKiri(){
				$serongkiri = " Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : " . parent::MainBass() . " sambil Serong kiri";
				return $serongkiri;
			}

			public function SerongKanan(){
				$serongkanan = " Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : " . parent::MainBass() . " sambil Serong Kanan";
				return $serongkanan;
			}

			public function Maju(){
				$maju = " Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : " . parent::MainBass() . " sambil Maju ";
				return $maju;
			}

			public function Mundur(){
				$mundur = " Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : " . parent::MainBass() . " sambil Mundur";
				return $mundur;
			}


			public function Duduk(){
				$duduk = " Nama : $this->nama , Kelamin : $this->j_kelamin Posisi : $this->posisi Kebiasaan : " . parent::MainBass() . " sambil Duduk";
				return $duduk;
			}

	}
$bassis = new Bassis("Udin","laki-laki","Pemain Bass","09876543","nela@gmail.com");

$bassis2 = new Bassis("Ubed","laki-laki","Pemain Bass","09876543","nela@gmail.com");

$bassis3 = new Bassis("Usep","laki-laki","Pemain Bass","09876543","nela@gmail.com");

$bassis4 = new Bassis("Shodiq","laki-laki","Pemain Bass","09876543","nela@gmail.com");

$bassis5 = new Bassis("Geri","laki-laki","Pemain Bass","09876543","nela@gmail.com");

?>