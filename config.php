<?php
	// connection
	$host = '127.0.0.1:3307';
	$username = 'root';
	$password = '';
	$database = 'dss';

	$koneksi = mysqli_connect($host,$username,$password);

	if (!$koneksi)
	{
		echo "Tidak dapat terkoneksi dengan server";
		exit();
	}

	if(!mysqli_select_db($koneksi, $database))
	{
		echo "Tidak dapat menemukan database";
		exit();
	}
?>