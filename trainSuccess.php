<?php
$data = json_decode(file_get_contents('./data/stats.json'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PokéCare - Train</title>
</head>
<body>
    <div class="center">
        <div class="container">
            <div class="header">
                <h1>PokéCare</h1>
            </div>

            <div class="content">
                <!-- Profil Pokemon -->
                <div class="sidebar">
                    <div class="potrait">
                        <img src="asset/Persian.png" alt="Persian">
                    </div>
                    <div class="title">
                        <h1>Persian</h1>
                        <div class="element">
                            <p>Normal</p>
                        </div>
                    </div>
                </div>
        
                <div class="content-item">
                    <!-- Train Output -->
                    <div class="item">
                        <h1>Level -> <?= $data->level ?></h1>
                        <h1>HP -> <?= $data->stats->hp ?></h1>
                        <h2><?= $data->moves[0]->name ?></h2>
                        <h2><?= $data->moves[0]->description ?></h2>
                    </div>

                    <!-- Footer -->
                    <div class="nav">
                        <ul>
                            <a href="index.php">
                                <li>
                                    Home
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>