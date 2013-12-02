<?php
	
	<?php
	
	$xml = simplexml_load_file("http://localhost/progin-raosanfady/data.xml"); // Loading the XML file
	echo "<h1>Servis milik Raosan F. Lillahi dan Fady N. Ilmy</h1>";
	echo "<h2>".$xml->getName()."</h2><br />";
    foreach($xml->children() as $data)
    {
        echo "data : ".$data."<br />";
        echo "No : ".$data->no." <br />";
        echo "Nama : ".$data->nama." <br />";
        echo "Tinggi : ".$data->tinggi." <br />";
        echo "Berat : ".$data->berat." <br />";

        echo "<hr/>";
    }	
?>

<?php
	
	$xml = simplexml_load_file("http://localhost/habib-andy/data/makanan.xml"); // Loading the XML file
	echo "<h1>Servis milik Habib M. Ridho dan Andy P.</h1>";
	echo "<h2>".$xml->getName()."</h2><br />";
    foreach($xml->children() as $menu)
    {
        echo "Menu : ".$menu."<br />";
        echo "Nama : ".$menu->nama." <br />";
        echo "Daerah : ".$menu->daerah." <br />";
        echo "Foto : ".$menu->foto." <br />";
        echo "Harga : ".$menu->harga." <br />";
        echo "Kategori : ".$menu->kategori." <br />";
        echo "Deskripsi : ".$menu->deskripsi." <br />";
        echo "<hr/>";
    }
?>

<?php
	
	$xml = simplexml_load_file("http://localhost/18211037/RestWebService/data/shortlist.xml"); // Loading the XML file
	echo "<h1>Servis milik kelompok 18211037</h1>";
	echo "<h2>".$xml->getName()."</h2><br />";
    foreach($xml->children() as $item)
    {
        echo "Item : ".$item."<br />";
        echo "Nama : ".$item->Nama." <br />";
        echo "Posisi : ".$item->Posisi." <br />";
        echo "Gaji : ".$item->Gaji." <br />";
        echo "Nilai : ".$item->Nilai." <br />";
       

        echo "<hr/>";
    }
	
	
?>

	
<?php	
    $xml = simplexml_load_file("http://localhost/18211010-18211035/progin.xml");
	echo "<h1>Servis milik M. Fajrin dan Ryan</h1>";
	echo <"h2>".$xml->getName()."</h2><br/>";
	foreach ($xml->children() as $Mahasiswa)
	{
		echo "Mahasiswa :".$Mahasiswa."<br />";
		echo "NIM : ".$Mahasiswa->NIM."<br />";
		echo "Nama:".$Mahasiswa->Nama."<br />";
		echo "Asal:".$Mahasiswa->Asal."<br />";
		echo <"hr/>";
	} ?>
<?php	
	$xml = simplexml_load_file ("http://localhost/BintangAdinandra/menu.xml");
	echo "<h1>Servis milik M. Bintang Adinandra dan Kamila Widyanto </h1>";
	echo <"h2>".$xml->getName()."</h2><br/>";
	foreach ($xml->children() as $mymenu)
	{
		echo "Menu :".$mymenu."<br />";
		echo "Nama : ".$mymenu->menu."<br />";
		echo "Harga :".$mymenu->harga."<br />";
		
	} ?>
	
<?php	
	$xml = simplexml_load_file ("http://localhost/II3160-18211003-18211050/datasql.xml");
	echo "<h1>Servis milik Dinda Tisi Kalista dan Khairani Ummah </h1>";
	echo <"h2>".$xml->getName()."</h2><br/>";
	foreach ($xml->children() as $row)
	{
		echo "Menu :".$row."<br />";
		echo "Nama : ".$row->ID."<br />";
		echo "Harga :".$row->NAME."<br />";
		
	} ?>
	
<?php	
	$xml = simplexml_load_file ("http://localhost/II3160-18211017-18211043/database_collection/xmldb.xml");
	echo "<h1>Servis milik Danny Pranoto dan Gumarus D. William </h1>";
	echo <"h2>".$xml->getName()."</h2><br/>";
	foreach ($xml->children() as $pasien)
	{
		echo "Pasien :".$pasien."<br />";
		echo "ID Pasien : ".$pasien->id_pasien."<br />";
		echo "Nama Pasien :".$pasien->nama_pasien."<br />";
		echo "Alamat Pasien :".$pasien->alamat_pasien."<br />";
	} ?>
	
<?php	
	$xml = simplexml_load_file ("http://localhost/II3160-Pemrograman-Integratif/menu.xml");
	echo "<h1>Servis milik Nurafni Eka A. dan Nicolas N.R. </h1>";
	echo <"h2>".$xml->getName()."</h2><br/>";
	foreach ($xml->children() as $minuman)
	{
		echo "Minuman:".$minuman."<br />";
		echo "Nama : ".$minuman->nama."<br />";
		echo "Harga :".$harga->harga."<br />";
		
	} ?>
	
<?php	
	$xml = simplexml_load_file ("http://localhost/II3160-progin-18211002-18211033/dbxml.xml");
	echo "<h1>Servis milik Azka Ihsan Nurrahman dan Farrell Yodihartomo </h1>";
	echo <"h2>".$xml->getName()."</h2><br/>";
	foreach ($xml->children() as $genre)
	{
		echo "Genre :".$musik."<br />";
		echo "Nama : ".$musik->nama."<br />";
		echo "Peminat :".$musik->peminat."<br />";
		
	} ?>
<?php	
	$xml = simplexml_load_file ("http://localhost/II3160-Tugas1-Tugas2/csvoutput.xml");
	echo "<h1>Servis milik Abraham Wahyu Kurniawan dan Ricky </h1>";
	foreach ($xml10->children() as $kantor)
	{
		echo "Pegawai :".$kantor."<br />";
		echo "No. : ".$kantor->No"<br />";
		echo "Nama:".$kantor->Nama."<br />";
		echo "Jenis Kelamin:".$kantor->JenisKelamin."<br />";
		echo "Jabatan:".$kantor->Jabatan."<br />";
	}
?>
