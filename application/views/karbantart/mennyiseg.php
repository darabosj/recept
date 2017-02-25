<?php
echo form_open('karbantart/mennyiseg/');
?>
<h1>mennyiseg</h1>
<table id="list">
<?php
foreach ($data->result() as $row){
		echo "<tr><th>";
		echo $row->meny ."</th><th>" ;		
		echo form_checkbox('r[]',$row->id, FALSE);
		echo "</th></tr>";
}
?>
</table>
<div class="new_input">
<?php
echo form_input('nev');
echo form_submit('del','Töröl');
echo form_submit('new','Uj');
echo form_close();
echo "<hr/>";
?>
</div>
