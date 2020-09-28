<h1> DERET FIBONACCI </h1>
<b> By : Putu Indah Permata Aji </b> <br> <br>
<form method="POST">
    Deret 1 : <input type="text" name="a" value="<?=isset($_POST['a']) ? $_POST['a'] : ''?>"><br><br>
    Deret 2 : <input type="text" name="b" value="<?=isset($_POST['b']) ? $_POST['b'] : ''?>"><br><br>
    Jumlah : <input type="text" name="c" value="<?=isset($_POST['c']) ? $_POST['c'] : ''?>"><br><br>
    <input type="submit" name= "submit" value="Hasil">
</form>
<?php
if (isset($_POST["submit"])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo "Hasil Deret Fibonacci Setelah Diinputkan User : <br> <br>";
echo "Deret 1 = ".$a ."<br>";
echo "Deret 2 = ". $b ."<br> <br>" ; 
echo $c. " Deret Fibonacci Selanjutnya : <br>";
for ($i=0 ; $i<$c; $i++){
    $hasil = $a + $b;
    echo "<br>".$hasil;

    $a = $b;
    $b = $hasil;
}
}
?>