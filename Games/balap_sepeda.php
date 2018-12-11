<?php
	
	require_once 'game.php';

	class Balap_Sepeda extends Game {

		protected $hewan;
		protected $nomor_urut;
		protected $jalan_pintas;
		protected $rintangan;
		protected $petir;

		public function __construct($nama="nama",$versi="versi",$kategori="kategori",$level="level",$kualitas="kualitas",$hewan="hewan",$nomor_urut="nomor_urut",$jalan_pintas="jalan_pintas",$rintangan="rintangan",$petir="petir")
			{
				parent::__construct($nama,$versi,$kategori,$level,$kualitas);

				$this->hewan 		= $hewan;
				$this->nomor_urut 	= $nomor_urut;
				$this->jalan_pintas = $jalan_pintas;
				$this->rintangan    = $rintangan;
				$this->petir 		= $petir;
			}
		
		
			public function MulaiBalapan(){
				$balapan = "Mulai" . parent::Balapan() . " dari nomor urut $this->nomor_urut";
				return $balapan;
			}

			public function TambahKecepatan(){
				$tambahkecepatan = "Tambah kecepatan untuk menghindari $this->rintangan";
				return $tambahkecepatan;
			}

			public function KurangiKecepatan(){
				$kurangikecepatan = "Kurangi Kecepatan ada $this->hewan di depan";
				return $kurangikecepatan;
			}

			public function Melompat(){
				$melompat = " Ada $this->petir Melompat tinggi untuk melewati ";
				return $melompat;
			}

			public function BalapanSelesai(){
				$selesai = "Berhasil ". parent::MenyelesaikanTantangan(). " Balapan Selesai";
				return $selesai;
			}

	}
$balap_sepeda = new Balap_Sepeda("","","","","","","1 sampai 10");

$balap_sepeda2 = new Balap_Sepeda("","","","","","","","","Bola Salju","");

$balap_sepeda3 = new Balap_Sepeda("","","","","","Rusa","","","","");

$balap_sepeda4 = new Balap_Sepeda("","","","","","","","","","Petir menyambar pohon");

$balap_sepeda5 = new Balap_Sepeda("","","","","","","","","","");

?>