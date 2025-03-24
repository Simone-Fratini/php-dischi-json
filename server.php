<?php
$jsonAdd = file_get_contents('./dischi.json');
$dischi = json_decode($jsonAdd);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Creare nuovo oggetto per il disco
    $newDisco = new stdClass();
    $newDisco->titolo = $_POST['titolo'] ?? '';
    $newDisco->artista = $_POST['artista'] ?? '';
    $newDisco->anno = $_POST['anno'] ?? '';
    $newDisco->genere = $_POST['genere'] ?? '';
    $newDisco->cover = "https://images.unsplash.com/photo-1602848596140-33c2b48c6ade?q=80&w=3878&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";

    // Aaggiuingi il disco all array
    $dischi[] = $newDisco;

    // Convertin in json
    $jsonString = json_encode($dischi, JSON_PRETTY_PRINT);
    file_put_contents('./dischi.json', $jsonString);

    // Ritorna alla pagina index
    header('Location: index.php');

}
?>