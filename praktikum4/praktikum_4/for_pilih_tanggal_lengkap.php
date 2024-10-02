Pilih Tanggal :
<select name="tgl">
<?php
for($i=1;$i<=31;$i++){
  echo "<option value = $i>$i</option>";
}
?>

Pilih bulan ;
<select name="bln">
<?php
for($i=1;$i<=12;$i++){
  echo "<option value=$i > $i </option>";
}
?>
</select>
