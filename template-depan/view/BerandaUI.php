<?php 

require_once 'View.php';
class BerandaUI extends View
{
	
	public function tampilTemplate()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}

 ?>