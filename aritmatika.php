<h1> BARISAN ARITMATIKA </h1>
<b> By : Putu Indah Permata Aji </b> <br> <br>
<form method="POST">
    Nilai Awal : <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
    Nilai Beda : <input type="text" name="b" value="<?=isset($_POST['b']) ? $_POST['b'] : ''?>"><br><br>
    Suku Yang Dicari : <input type="text" name="c" value="<?=isset($_POST['c']) ? $_POST['c'] : ''?>"><br><br>
    <input type="submit" name ="submit" value="Hasil">
</form>
<?php
if (isset($_POST["submit"])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo "Nilai Awal = ". $a ;
echo "<br> Nilai Beda = ". $b ;
echo "<br> <br> Hasil Barisan Aritmatika Setelah Diinputkan User : " ; 
for ($i=1 ; $i<=$c; $i++){
    $hasil = $a + ($b*($i-1));    
    echo "<br>".$hasil;
}
$hasilsuku = $a + ($c-1) * $b;
echo "<br> <br> Nilai Suku ke- " .$c; 
echo "<br>".$hasilsuku;
}
?>