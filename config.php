<?

if(!isset($_db_inc_)) {
	echo "File not found.";
	exit;
}

$db_host = 'localhost';
$db_user = 'wordpress';
$db_password = 'wordpress';
$db_database = 'wordpress';

$BATTLE_SECOND = 10; // �������� ��� � ��������, ��� ������, ��� ���������
$MESSAGE_COUNT = 15;
$LIFE_KOEF = 20; // �������� �����������, ��� ������, ��� �������
$EVENT_KOEF = 30; // ������� �������, ��� ������, ��� ����
$WEAPON_EVENT_KOEF = 70; // ������� ������� � �������, ��� ������, ��� ����, �� ������ 10

$game_user = 'user'; //������� � ��������������
$game_login = 'login';
$game_email = 'email';
$game_name = 'name'; //
$game_id = 'id';
$game_password = 'password';


$save_msg_time = time();

$link = mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($db_database);
mysql_query("SET CHARACTER SET utf8"); 
mysql_query("SET SESSION collation_connection='utf8_general_ci'");
mysql_query("SET NAMES utf8");

?>