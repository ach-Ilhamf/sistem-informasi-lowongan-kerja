<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Anda</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>

<?php
    // Replace the URL with the actual URL of your API endpoint
    $apiUrl = 'http://loker2.com:8080/api/data';
    // Get JSON data from the API
    $jsonData = file_get_contents($apiUrl);

    // Decode the JSON data
    $data = json_decode($jsonData);

    // Check if the data is successfully decoded
    if ($data !== null) {
        // Access the data as needed
        foreach ($data->data as $item) {
            echo $item->nama_prs . "<br>";
            echo $item->posisi . "<br>";
            echo $item->deskripsi . "<br>";
        }
    } else {
        // Handle decoding error
        echo 'Failed to decode JSON data';
    }
?>


</body>
</html>
