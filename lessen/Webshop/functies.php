<?php
session_start();
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

function leesWinkelmand() {
    if (!isset($_SESSION['winkelmand'])) {
        $_SESSION['winkelmand'] = [];
    }
    return $_SESSION['winkelmand'];
}

function voegToeAanWinkelmand($id) {
    if (!isset($_SESSION['winkelmand'])) {
        $_SESSION['winkelmand'] = [];
    }

    if (isset($_SESSION['winkelmand'][$id])) {
        $_SESSION['winkelmand'][$id]++;
    } else {
        $_SESSION['winkelmand'][$id] = 1;
    }
}


function leegWinkelmand() {
    $_SESSION['winkelmand'] = [];
}

function berekenTotaal($winkelmand, $producten) {
    $totaal = 0;

    $prijzen = [];
    foreach ($producten as $product) {
        $prijzen[$product['id']] = (float) $product['prijs'];

    }

    foreach ($winkelmand as $id => $aantal) {
        if (isset($prijzen[$id])) {
            $totaal += $prijzen[$id] * $aantal;
        }
    }

    return $totaal;
}

?>