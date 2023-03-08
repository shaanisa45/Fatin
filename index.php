<?php
  include( 'config.php' );
?>

<html>
  <head>
  <title> SISTEM PENDAFTARAN KVK</title>
  </head>
  <style>
  h2 {
    text-align: center;
    padding-top: 20px;
  }
  body {
    background-color: #ddd4c1;
  }
  </style>
   

  <body>
  <h2>REKOD PENDAFTARAN AHLI</h2>
  <center>
  <table border=1 cellpadding=5 cellspacing=0 bgcolor=#b4f0ea>
    <tr>
    <th>NAMA PELAJAR</th>
    <th>NO KAD PENGENALAN</th>
    <th>JANTINA</th>
    <th>ALAMAT</th>
    <th>EMAIL</th>
    <th>NO TELEFON</th>
    <th>KURSUS</th>
    <th>EDIT</th>
    </tr>
    
    
    <?php
    $papar=mysqli_query($connect, "SELECT * FROM pelajar");
    while($row=mysqli_fetch_array($papar)){
       
    echo "
    <tr>
      <td>".$row['nama_pelajar']."</td>
      <td>".$row['no_kp']."</td>
      <td>".$row['jantina']."</td>
      <td>".$row['alamat']."</td>
      <td>".$row['email']."</td>
      <td>".$row['no_tel']."</td>
      <td>".$row['kursus']."</td>
      
      <td>","<a  href=\"padam.php?id_pelajar=".$row['id_pelajar']. "\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</td>
             
    </tr>
    ";
    
    }
    ?>      
  </table>
  <p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH PELAJAR</button></a></p>
  
  </center>
  </body>
</html>