<?php
require_once 'pokemon.php';

$json = json_decode(file_get_contents('./data/stats.json'));
$pokemon = new Pokemon($json);
$data = $pokemon->getData();
$stats = $data->stats

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PokéCare - Dashboard</title>
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
                        <h1><?= $data->name; ?></h1>
                        <div class="element">
                            <p><?= $data->type; ?></p>
                        </div>
                    </div>
                </div>
        
                <div class="content-item">
                    <!-- Stats Pokemon -->
                    <div class="item">
                        <div class="card">
                            <div class="card-header" style="background-color: unset; padding-right: 5rem;">
                                <h1>Stats</h1>
                                <h1>Level <?= $data->level; ?> (<?= $data->exp ?>/<?= $data->threshold ?>)</h1>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th style="width: 10rem;"><span>HP</span></th>
                                        <td style="width: 15rem;"><span><?= $stats->hp; ?></span></td>
                                        <th style="width: 10rem;"><span>Defense</span></th>
                                        <td style="width: 5rem;"><span><?= $stats->def; ?></span></td>
                                    </tr>
                                    <tr>
                                        <th><span>Attack</span></th>
                                        <td><span><?= $stats->atk; ?></span></td>
                                        <th><span>Speed</span></th>
                                        <td><span><?= $stats->spd; ?></span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" style="background-color: unset;">
                                <h1>Special Moves</h1>
                            </div>
                            <div class="card-body">
                                <?php foreach ($data->moves as $move): ?>
                                <span><?= $move->name; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="nav">
                        <ul>
                            <a href="log.php">
                                <li>
                                    Training Log
                                </li>
                            </a>
                            <a href="train.php">
                                <li>
                                    Train
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