<?php
$json = file_get_contents('./dischi.json');
$dischi = json_decode($json);


function genereBadge($genere){
    switch($genere){
        case "Rock Progressivo":
            return '<span class="bg-purple-600 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
        case "Hard Rock":
            return '<span class="bg-red-600 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
        case "Pop":
            return '<span class="bg-pink-500 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
        case "Grunge":
            return '<span class="bg-gray-700 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
        case "Hip Hop":
            return '<span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
        case "Electronic":
            return '<span class="bg-blue-500 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
        default:
            return '<span class="bg-gray-500 text-white px-2 py-1 rounded-full text-sm">' . $genere . '</span>';
    }
}


?>