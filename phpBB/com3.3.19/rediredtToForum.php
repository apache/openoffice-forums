<?php
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
                $uri = 'https://';
        } else {
                $uri = 'http://';
        }
        $uri .= $_SERVER['HTTP_HOST'];
	preg_match('/\/(\w\w)\/?$/i', getcwd(), $matches);
	$lang = $matches[1];
        header('Location: '.$uri.'/'.$lang.'/forum');
        exit;
?>
