
<?php
echo form_open('karbantart/alapanyagok/');
?>
<h1>alapanyagok</h1>
<table id="list">
<?php
foreach ($data->result() as $row){
		echo "<tr><th>";
		echo $row->nev ."</th><th>" ;
		echo $row->meny ."</th><th>";		
		echo form_checkbox('r[]',$row->id, FALSE);
		echo "</th></tr>";
}
?>
</table>
<div class="new_input">
<?php
$a = array();
foreach ($m->result() as $ra){	
	$a[$ra->id]=$ra->meny;
	}
echo form_input('nev');
echo form_dropdown('v', $a);
echo form_submit('del','Töröl');
echo form_submit('new','Uj');
echo form_close();
echo "<hr/>";
?>
</div>
