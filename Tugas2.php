<!DOCTYPE html>

<html>
  <title>Weaboo Idol</title>


<body>
  <div id="main">
  <h1>Selamat datang di kontes Weaboo Idol! </h1>
  <h2>Silakan klik tombol di bawah untuk memilih informasi yang ingin anda dapatkan</h2>


  <p>
  <form action="ShowIdol.php" method="get">
    <input type="submit" name="show" value="Info Idol" id="submit" />
  </form>
  </p>
  
  <p>
  <form action="ShowLagu.php" method="get">
    <input type="submit" name="show" value="Info Lagu" id="submit" />
  </form>
  </p>
  

   <form action="ShowJuri.php" method="get">
    <input type="submit" name="show" value="Info Juri" id="submit" />
  </form>
  </p>
  <br />
  <br />
  
    <form><input type="button" name="show" value="XML Idol" 
onClick="window.location.href='http://localhost/Progint/Tugas%202/DaftarIdol.xml'"/>
  </form>
  </p>
   <form><input type="button" name="show" value="XML Lagu" 
onClick="window.location.href='http://localhost/Progint/Tugas%202/DaftarIdol.xml'"/>
  </form>
  </p>
   <form><input type="button" name="show" value="XML Juri" 
onClick="window.location.href='http://localhost/Progint/Tugas%202/DaftarIdol.xml'"/>
  </form>
  </p>
  
  <br />
  <form action="Tugas3.php" method="get">
    <input type="submit" name="show" value="Servis Teman" id="submit" />
  </form>
  </p>
  
  <h1>Created by: </h1>
  <h2>Aditya Pradita S. (18211001)</h2>
  <h2>Rakaputra (18211059)</h2>

</body>
</html> 
