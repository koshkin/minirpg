<?php include ("../system.php");?>

 <!--   USER BEGIN   -->
 <table align="center">
	<tr>
	<td><input type="button" value="���" onclick="location.href='../play.php'" /></td>
	<td><input type="button" value="�������" onclick="location.href='info.php'" /></td>
	<td><input type="button" value="���������" onclick="location.href='invent.php'" /></td>
	<td><input type="button" value="�����" onclick="location.href='../auth/logout.php'" /></td>
	</tr></table>
<table><tr><td><center><b>��������</b></center></td></tr>
<tr>
<td><b>���:</b></td> <td><?=$user['name'];?></td></tr>
<tr><td><b>�������:</b></td> <td><?=$user['level'];?></td></tr>
<b>�����:</b> <?=GetClassName($user['class']);?><br>
<b>��������:</b> <font color="#FF0000"><?=$user['hp'];?></font>/<?=GetHP($user['level']);?><br>
<b>����:</b> <?=$user['exp'];?><br>
<b>������:</b> <font color="#FF0000"><?=$user['victory_count'];?></font>/<?=($user['battle_count'] - $user['victory_count']);?> (<?=$user['battle_count'];?>)<br>
<?if($user['weapon'] != '') {?>
<font color="#FF0000"><?=$user['weapon'];?></font><br>
<?}?>
<?if($user['quest'] != 0) {?>
<br>������: <b><?=$user['quest_name'];?></b> ������ �������.<br>
<?}?>
		<!--   USER END   -->