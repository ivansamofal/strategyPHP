<?
		//автозагрузка классов
	function __autoload( $className ) {
	  $className = strtolower(str_replace( "..", "", $className ));
	  require_once( "$className.php" );
	}
	
	
	class Strategy {
		private $strategy;
		function __construct(Page $strategy){
			$this->strategy = $strategy;
		}
		function getPage($name){
			return $this->strategy->newFile($name);
		}
	}
	
	$pdf = new Strategy(new pdf);
	echo $pdf->getPage('index');
	echo '<br>';
	$php = new Strategy(new php);
	echo $php->getPage('index');
	