<!DOCTYPE html>
<head>      
        <title>Aplikasi Kalkulator Dengan OOP PHP</title>
        <?php require("kalkulator.php"); ?> <!--untuk import file Kalkulator.php-->
</head>
<body>
  <form method="post">
     
  <div align="center">
  <b>LATIHAN OPERATOR ARITMATIKA OOP</b></div>
  
   <table align="center">
    <tr>
        <td><input type="text" name="number1" size="10" placeholder="nilai1"></td>
        <td><input type="text" name="number2" size="10" placeholder="nilai2"></td>
        <td><select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        </select></td>
        <td><input type="submit" name="submit" value="Hitung"></td>
      
    </tr>
   </table>
   </form>
   </br>
  <center>
  <?php
if (isset($_POST['submit'])) {
   $hasil = new Kalkulator(); //membuat objek hasil dari class kalkulator
   $angka1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
   $angka2 = $_POST['number2'];
   $opr = $_POST['operator'];
   if($opr == '+'){
    echo $angka1." ".$opr." ".$angka2." = ";
    $hasil->tambah($angka1,$angka2);
   }
   else if($opr == '-'){
    echo $angka1." ".$opr." ".$angka2." = ";
    $hasil->Kurang($angka1,$angka2);
   }
   else if($opr == '*'){
    echo $angka1." ".$opr." ".$angka2." = "; 
    $hasil->Kali($angka1,$angka2);
   }
   else if($opr == '/'){
    echo $angka1." ".$opr." ".$angka2." = "; 
    $hasil->Bagi($angka1,$angka2);
   }
}
  ?>
  </center>
</body>
  
</html>