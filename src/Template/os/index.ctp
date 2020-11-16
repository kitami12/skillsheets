
<h1>スキルシート</h1>

<table>
<tr>
<th>os</th>
</tr>

<?php foreach ($oss as $os): ?>
<tr>
<td>
<?= $this->Html->link($os->os, ['action' => 'view']) ?>
</td>

</tr>

    

<?php endforeach; ?>
<td>
< div id = "comboField"> 
<input name = "textfield" type = "text" class = "textField" id = "tField2"> 
<select name = "select" class = "selectBox" id = "selBox2" onChange = "getSelect（2、this.value）"> 
<option value = "test1"> test1 </ option> 
<option value = "test2"> test2 </ option> 
<option value = "test3"> test3 </ option> 
</ select> 
<input type = "button" class = "bsize" value = "ボタン" onclick = "getText（2）"> 
</ div>
</td>
<table>


