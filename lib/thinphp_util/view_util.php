<?php

function currentViewDir()
{
	global $app_i;	
	if (isset($_COOKIE['cke_view']) && $_COOKIE['cke_view'] !='') {
		$cke_view = $_COOKIE['cke_view'];
		return $cke_view;
	}
	return $app_i['default_view'];
}

function file_get_contents_with_vars($fpath, $arrKeyValue)
{
	foreach ($arrKeyValue as $k => $val) {
		if (is_numeric($k)) continue;
		if ($k != '' && $k[0] != '{') {
			$arr['{$'.$k.'}'] = $val;
		}
		else {
			$arr[$k] = $val;
		}
	}	
	$content = file_get_contents($fpath);	
	if ($content === false) return '';	
	foreach ($arr as $k => $val) {
		$content = str_replace($k, $val, $content);
	}	
	return $content;
}

function seoTitle($title)
{
	// replace non alphanumeric chars with dashes
	return trim(preg_replace('/[^a-z0-9-]+/', '-', strtolower($title)), '-');
}
	
function t($textKey)
{
	global $app_i, $lang;
	$langKey = currentViewDir();	
	if (isset($lang[$langKey])) {
		$ret = $lang[$langKey][$textKey];

		// fill parameters into lang key
		$numargs = func_num_args();
		if ($numargs > 1) {
			$args = func_get_args();
			for ($i = 1; $i < $numargs; $i++) {
				$ret = str_replace('{'.($i-1).'}', $args[$i], $ret);
			}
		}
		return $ret;
	}
	return '';
}

function v($smartyView)
{
	global $app_i;	
	if (isset($_COOKIE['cke_view']) && $_COOKIE['cke_view'] !='')
	{
		$cke_view = $_COOKIE['cke_view'];
		$newSmartyView = $cke_view.'/'.$smartyView;
		if (file_exists(BASEVIEW.'/'.$newSmartyView)) return $newSmartyView;
	}
	return $app_i['default_view'].'/'.$smartyView;
}
