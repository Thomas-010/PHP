<?php

function leesProducten() {
    $bestand = 'data/producten.csv';
    $producten = [];


    if (!file_exists($bestand)) {
        return [];
    }

    if (($handle = fopen($bestand, 'r')) !== false) {

      fgetcsv($handle, 1000, ',');

      while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        if (count($data) < 4) {
            continue;
        }

          $producten[] = [
              'id' => $data[0],
              'naam' => $data[1],
              'prijs' => $data[2],
              'afbeelding' => $data[3]
          ];
      }
        fclose($handle);
    } 
    return $producten;
}


?>