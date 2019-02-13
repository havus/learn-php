<?php
/**
 * @package Hello_World
 * @version 1.0
 */
/*
Plugin Name: Hello World
Plugin URI: http://wordpress.org/plugins/hello-world/
Description: Latihan Membuat Plugin
Author: Usman
Version: 1.0
Author URI: http://ztoro.com/
*/

$link=mysqli_connect("localhost","root","","test");
if (!$link) {die('not konek');}else{echo "konek";}
global $link;

function hello_func(){
	global $link;
	$data=mysqli_query($link,"SELECT * FROM  coba");
	$no=1;
	echo "<br><br><br><br>";

	if (isset($_GET['action']) and $_GET['action']=='del') {
		mysqli_query($link,"DELETE FROM coba WHERE id='$_GET[ids]'");
	}


	while ($row=mysqli_fetch_assoc($data)) {
		echo "$no. $row[nama] $row[alamat] 
			<a href='admin.php?page=hello-url&action=del&ids=$row[id]' >del</a><br>";
		$no++;
	}
}

//add_action( 'admin_notices', 'hello' );

add_action('admin_menu', 'nav_menu',99 );

function nav_menu(){ 
	add_menu_page(
		'Title Contoh Menu',
		'Label Contoh Menu',
        'manage_options',
        'hello-url',
        'hello_func',
        '',
        10
	);
}

function form_contact_func(){
	echo "
	<form action='' method='POST'>
		nama : <input type=text name=nama value='' ><br>
		alamat : <input type=text name=alamat value='' ><br>
		<input type=submit name='submit' value='  kirim  ' >
	</form>
	";
	if(isset($_POST['submit'])){
		// $string_json=json_encode($_POST);
		// add_option("kontak_db",$string_json);

		global $link;
		mysqli_query($link,"INSERT INTO coba(id,nama,alamat) VALUES('','$_POST[nama]','$_POST[alamat]')");

	}
}

add_shortcode( 'kontak_form', 'form_contact_func' );






