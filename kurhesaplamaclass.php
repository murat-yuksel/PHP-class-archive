<?php 
	
	class doviz 
	{
		$alis = array(
		‘usd’    => ‘1.8692’,
		‘aud’    => ‘1.8692’,
		‘dkk’    => ‘0.3008’,
		‘eur’    => ‘2.2407’,
		‘gbp’    => ‘2.8328’,
		‘chf’    => ‘1.8625’,
		’sek’    => ‘0.2676’,
		‘cad’    => ‘1.8025’,
		‘kwd’    => ‘6.2755’,
		‘nok’    => ‘0.3044’,
		’sar’    => ‘0.4772’,
		);
		
		$satis = array(
		‘usd’    => ‘1.8681’,
		‘aud’    => ‘1.8682’,
		‘dkk’    => ‘0.3002’,
		‘eur’    => ‘2.2401’,
		‘gbp’    => ‘2.8318’,
		‘chf’    => ‘1.8615’,
		’sek’    => ‘0.2664’,
		‘cad’    => ‘1.8012’,
		‘kwd’    => ‘6.2744’,
		‘nok’    => ‘0.3032’,
		’sar’    => ‘0.4761’,
		);
		
		public static function dovizdentlye($para, $tur, $alis = true)
		{
			if($alis)
			{
				$alispara = $alis[$tur];
				$tl = ($para * $alispara);
			}
			else
			{
				$satispara = $satis[$tur];
				$tl = ($para * $satispara);
			}
			
				return $tl;
		}
		
		public static function tldendovize($para, $tur, $alis = true)
		{
			if($alis)
			{
				$alispara = $alis[$tur];
				$tl = ($para / $alispara);
			}
			else
			{
				$satispara = $satis[$tur];
				$tl = ($para / $satispara);
			}
			
				return $tl;
		}
	}
?>