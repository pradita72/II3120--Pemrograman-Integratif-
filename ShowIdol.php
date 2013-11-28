<?php
	
	$xml = simplexml_load_file("DaftarIdol.xml"); // Loading the XML file
    echo "<h2>".$xml->getName()."</h2><br />";
	
    foreach($xml->children() as $Idol)
    {
        echo "Idol : ".$Idol."<br />";
        echo "No : ".$Idol->No." <br />";
        echo "Nama : ".$Idol->Nama." <br />";
        echo "Umur : ".$Idol->Umur." <br />";
        echo "Gender : ".$Idol->Gender." <br />";
        echo "Agency : ".$Idol->Agency." <br />";
        echo "<hr/>";
    }
	
	
?>
