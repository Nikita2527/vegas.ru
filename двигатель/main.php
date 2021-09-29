<?php
 // print_r();
 require("../config.php");

 $template = 
     str_replace(array(
			'{%forum%}',
            '{%nameproject%}',
            '{%isclass%}'
		),
		array(
			$config['forum'],
            $config['_name_project_'],
            ' class="home"'
		),
		file_get_contents('../../templates/header.tpl')) .
     str_replace(
		array(
			'{%group%}',
			'{%ip%}',
			'{%port%}',
            '{%nameproject%}'
		),
		array(
			$config['vk'],
			$config['_ip_'],
			$config['_port_'],
            $config['_name_project_']
		),
		file_get_contents('../../templates/main.tpl')
	);

	/* Выходим, показав сам шаблон */
	exit($template);
?>