<?php
$data = file_get_contents("php://input"); // Saa JSON-dataa lomakkeesta
$file = 'responses.json';

// Tarkistetaan, onko tiedosto jo olemassa
if(file_exists($file)) {
    $current = json_decode(file_get_contents($file), true);
} else {
    $current = [];
}

// Lisätään uusi vastaus listaan
$current[] = json_decode($data, true);
file_put_contents($file, json_encode($current, JSON_PRETTY_PRINT));

echo "Tallennettu onnistuneesti!";
?>
