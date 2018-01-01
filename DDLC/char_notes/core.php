<?php 
	$baseScript = implode('/', preg_split('/[\\\\\\/]/', $_SERVER['SCRIPT_FILENAME']));
	$thisScript = implode('/', preg_split('/[\\\\\\/]/', __FILE__));
	if ($baseScript == $thisScript) die();



	global $data;

	foreach ($data['punctuation'] as $key => &$val) {
		$val = "$key - ".str_repeat("I", $val)." ($val)";
	}

	function printList ($array) {
		echo "<ul><li>".implode("</li><li>", $array)."</li></ul>";
	}

?>
<html>
<head> 
	<style>
		body {
			background-color: #eee;
			font-family: sans-serif;
		}

		.box {
			background-color: #fff;
			border: 2px ridge #ddd;
			border-radius: 10px;
			margin: 30px;
			padding: 20px;
		}
		.box.primary {
			background-color: #F5c6FF;
			border-color: #8300A0;
		}

		.attribution {
			text-align: right; 
			font-style: italic;
		}
		.attribution:before {content:"-";}
	</style>
</head>
<body>
	<div class="box primary">
		<h2><a href="../">DDLC Reference Dump</a></h2>
		<h3><? echo $data['name']; ?> notes</h3>
	</div>
	<div class="box">
		<h3>Greetings</h3>
		<?php printList($data['greetings']); ?>
		<h3>Sentence line ending counts</h3>
		<?php printList($data['punctuation']); ?>
		<h3>Quotes</h3>
		<?php printList($data['quotes']); ?>
		<h3>General notes</h3>
		<?php printList($data['notes']); ?>
	</div>
</body>
</html>