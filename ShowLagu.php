<?php
    // Loading the XML file
    $xml = simplexml_load_file("DaftarLagu.xml");
    echo "<h2>".$xml->getName()."</h2><br />";
    foreach($xml->children() as $Lagu)
    {
        echo "Lagu : ".$Lagu."<br />";
        echo "No : ".$Lagu->No." <br />";
        echo "Judul : ".$Lagu->Judul." <br />";
        echo "Pengarang : ".$Lagu->Pengarang." <br />";
        echo "Durasi : ".$Lagu->Durasi." <br />";
        echo "Genre : ".$Lagu->Genre." <br />";
        echo "<hr/>";
    }
?>
