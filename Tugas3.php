<?php
	
	$xml = simplexml_load_file("http://localhost/progin-raosanfady/data.xml"); // Loading the XML file
	echo "<h1>Servis milik Raosan-Fady</h1>";
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
	echo "<h1>Servis milik Habib-Andy</h1>";
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
