<?php 

function Retrieve($path)
{
	$delimiter = strstr(PHP_OS, "WIN") ? "\\" : "/";
	if ($dir=@opendir($path))
	{
		while (($element=readdir($dir))!== false)
		{
			if($element== "." || $element== "..")
				continue;
			if (is_dir($path.$delimiter.$element))
		$array[$element] = Retrieve($path.$delimiter.$element);
			else
				$array[] = $element;
		}
		closedir($dir);
	}
return (isset($array) ? $array : false);
}

$files = Retrieve(__DIR__);

?>