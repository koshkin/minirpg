<?php
$_db_inc_ = true;
include("db.inc.php");
include("robo1.php");
include("robo2.php");

$userlist_result = mysql_query("SELECT * FROM `user` WHERE 1=1 ORDER BY `victory_count` DESC");
echo mysql_error();
$count = 0;
while($user = mysql_fetch_assoc($userlist_result)) {
	$userlist[$count] = $user;
	$count++;
}

echo $roboverh;
?>
<center><h3>���������� ����������</h3>

<font size="-1"><font color="#00AA00"><b>������</b></font> �������� ����.</font></center>
<br>
<table align="center" border="1" bordercolor="#F0F0F0">
<tr>
<td align="center" width="20"> </td>
<td align="center"><b>���</b></td>
<td align="center"><b>�������</b></td>
<td align="center" color="#FF0000"><b>������</b></td>
<td align="center"><b>�����</b></td>
<td align="center"><b>�����</b></td>
<td align="center"><b>������</b></td>
</tr>
<?for($i = 0; $i < $count; $i++) {?>
<tr>
<td align="center" width="20"><b><?=($i + 1);?></b></td>
<td align="center" <?if($userlist[$i]['type'] == 'm') {echo "bgcolor=\"#DCFFDC\"";}?>><?=$userlist[$i]['name'];?></td>
<td align="center"><?=$userlist[$i]['level'];?></td>
<td align="center"><font color="#FF0000"><?=$userlist[$i]['victory_count'];?></font></td>
<td align="center"><?=$userlist[$i]['battle_count'];?></td>
<td align="center"><?=$userlist[$i]['hp'];?></td>
<td align="center"> <?=$userlist[$i]['weapon'];?></td>
</tr>
<?}?>
</table>
<br>
<center><font size="-2" color="#DDDDDD">(c) ������ 'Mortem' �����, 2006</font></center>
<?php echo $roboniz; ?>
