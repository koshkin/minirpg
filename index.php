<?php

include("robo2.php");

session_set_cookie_params(180000, "/");
session_start();

if(isset($_SESSION['mmmorpglogin']) or isset($_SESSION['mmmorpgpassword'])) {
	header("Location:  play.php");
	exit;
}
$msg = '';
$msg2 = '';
if(isset($_GET['err']))	$err = (int)$_GET['err']; else $err = 0;
if($err == 1) {$msg = "�� ���������� ����� ��� ������.";}
if($err == 2) {$msg = "���������� ���������.";}
if($err == 3) {$msg2 = "������ �� ���������.";}
if($err == 4) {$msg2 = "��� ��� ����� ������.";}
if($err == 5) {$msg = "����� � ����������� �������������.";}

echo $roboverh;
include ("style/index.html");
include ("style/login.html");
echo $roboniz; ?>
