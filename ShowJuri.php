<?php
    // Loading the XML file
    $xml = simplexml_load_file("DaftarJuri.xml");
    echo "<h2>".$xml->getName()."</h2><br />";
    foreach($xml->children() as $Juri)
    {
        echo "Juri : ".$Juri."<br />";
        echo "No : ".$Juri->No." <br />";
        echo "Nama : ".$Juri->Nama." <br />";
        echo "Akreditasi : ".$Juri->Akreditasi." <br />";
        echo "Kategori : ".$Juri->Kategori." <br />";
        echo "<hr/>";
    }
?>
