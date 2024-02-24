<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance' => 50
    ],
];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Mongiello">
    <meta name="description" content="PHP Hotel">
    <title>PHP Hotel</title>

     <!--§ font-awesome -->
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'
        integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=='
        crossorigin='anonymous'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container w-75">
        <h1 class="text-center m-4">Hotels List</h1>

        <table class="table table-hover">
            <thead>
                <tr class="fs-4">
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col" class="text-center">Parking</th>
                <th scope="col" class="text-center">Vote</th>
                <th scope="col" class="text-center">Distance</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                       <th scope="col"><?= $hotel['name']?></th>
                       <td><?= $hotel['description'] ?></td>
                       <td class="text-center">
                            <?php $icon = $hotel['parking'] ? 'far fa-circle-check fa-lg text-success' : 'far fa-circle-xmark fa-lg text-danger' ?>
                            <i class="<?= $icon ?>"></i>
                       </td>
                       <td class="text-center"><?= $hotel['vote'] ?>/5</td>
                       <td class="text-center"><?= $hotel['distance'] ?> km</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>

</body>
</html>