    <!--   USER BEGIN   -->
<center><b>��������</b></center>
<b>���:</b> <?=$user['name'];?><br>
<b>�������:</b> <?=$user['level'];?><br>
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