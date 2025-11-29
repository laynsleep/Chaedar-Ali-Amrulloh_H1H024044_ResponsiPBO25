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
                    <!-- Train Menu -->
                    <div class="item">
                        <div class="card" style="height: 100%;">
                            <div class="card-header" style="background-color: unset; padding-right: 5rem;">
                                <h1>Train</h1>
                            </div>
                            <div class="card-body">
                                <form action="trainHelper.php" method="post">
                                    <div class="input-form">
                                        <span>Jenis Latihan: </span>
                                        <label for="attackType">
                                            <div class="input-group">
                                                <input type="radio" name="trainType" id="attackType" value="0" required/>
                                                <span>Attack</span>
                                            </div>
                                        </label>
                                        <label for="defenseType">
                                            <div class="input-group">
                                                <input type="radio" name="trainType" id="defenseType" value="1" required/>
                                                <span>Defense</span>
                                            </div>
                                        </label>
                                        <label for="speedType">
                                            <div class="input-group">
                                                <input type="radio" name="trainType" id="speedType" value="2" required/>
                                                <span>Speed</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="input-form">
                                        <span>Intensitas</span>
                                        <div class="input-group">
                                            <p>1h</p>
                                            <input type="range" min="1" max="5" name="intensity" style="display:block;"/>
                                            <p>5h</p>
                                        </div>
                                    </div>
                                    <button type="submit"><span>GO>>></span></button>
                                </form>
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