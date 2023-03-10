<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    ?>

    <header>
        <h1>
            Hotels
        </h1>
    </header>
    <main>
        <main>
            <pre>
         <?php var_dump($hotels);
            ?>
        </pre>
            <table class="table">
                <tbody>
                    <tr>
                        <td> 
                            Name: 
                            <?php foreach ($hotels as $hotelList) {
                                  echo '  ' . $hotelList["name"] . '  ||   ';
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             Description :
                            <?php foreach ($hotels as $hotelList) {
                                  echo  '  ' .  $hotelList["description"] . '  ||   ';
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             Vote :
                            <?php foreach ($hotels as $hotelList) {
                                  echo  '  ' .  $hotelList["vote"] . '  ||   ';
                                }
                            ?>
                        </td>
                    </tr>

                </tbody>
            </table>
        </main>
</body>

</html>