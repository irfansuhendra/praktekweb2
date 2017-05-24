<?php 

require_once 'View.php';
include 'model/Berita.php';
class BerandaUI extends View
{
	
	public function tampilTemplate()
	{
		include_once 'model/Berita.php';
		$brt = new Berita();
		$isi_berita = $brt->ambilBerita();

		include_once 'pages/beranda.php';
		
		$this->end();
	}
}

 ?>