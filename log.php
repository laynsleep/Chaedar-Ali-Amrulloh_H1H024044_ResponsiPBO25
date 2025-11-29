<?php
$logs = json_decode(file_get_contents('./data/log.json'));
$tipe = ["Attack", "Defense", "Speed"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PokéCare - Training Log</title>
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
                    <!-- Log -->
                    <div class="item">
                        <div class="card">
                            <div class="card-header">
                                <h1>Log</h1>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th>Tipe Latihan</th>
                                        <th>Intensitas</th>
                                        <th>Level</th>
                                        <th>Hp</th>
                                        <th>Durasi</th>
                                    </tr>
                                    <?php foreach ($logs as $log): ?>
                                    <tr>
                                        <td><?= $tipe[$log->type] ?></td>
                                        <td><?= $log->intensity ?></td>
                                        <td><?= $log->levelBefore ?> -> <?= $log->levelAfter ?></td>
                                        <td><?= $log->hpBefore ?> -> <?= $log->hpAfter ?></td>
                                        <td><?= $log->intensity ?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </table>
                            </div>
                        </div>
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