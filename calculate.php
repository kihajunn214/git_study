<?php
if (!empty($_GET['data1']) && !empty($_GET['data2'])) {
	$data1 = $_GET['data1'];
	$data2 = $_GET['data2'];
	if (is_numeric($data1) && is_numeric($data2)) {
		$data3 = $data1 + $data2;
		echo $data3;
		echo push_practice3;
	} else {
		echo '数字以外が含まれています';
	}
} else {
	header('Location: fail.php');
	exit;
}
?>
