        <title>Stream | <?php echo $siteName;?></title>
    </head>
    <body>
    <!-- Loader -->
    <div class="fh5co-loader"></div>
    <div id="fh5co-page">
        <nav id="fh5co-nav" role="navigation">
            <ul>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>home" class="transition">Home</a></li>
                <li class="animate-box fh5co-active"><a href="<?php echo BASE_HREF;?>stream" class="transition">Stream</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>contest" class="transition">Contest</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>donation_box" class="transition">Donation Box</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>about" class="transition">About</a></li>
            </ul>
        </nav>
        <header id="fh5co-header" role="banner" class="fh5co-project js-fh5co-waypoint no-border" data-colorbg="#222222" data-next="yes">
            <div class="container">
                <div class="fh5co-text-wrap animate-box">
                    <div class="fh5co-intro-text">
                        <h1>When I do stream <span>schedule</span>, What I play, What I doing</h1>
                        <img alt="Twitch Status" src="https://img.shields.io/twitch/status/mvt3am?style=for-the-badge">
                    </div>
                </div>
            </div>
            <div class="btn-next animate-box fh5co-learn-more">
                <a href="#" class="scroll-btn"><span>See the detail</span><i class="icon-chevron-down"></i></a>
            </div>
        </header>
        <div class="js-fh5co-waypoint fh5co-project-detail" id="fh5co-main" data-colorbg="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row row-bottom-padded-sm animate-box">
                            <div class="col-md-3">
                                <h3 class="fh5co-section-heading" id="schedule"><span class="fh5co-number">N<sup>o</sup> 1</span> Schedule</h3>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    I do streaming only 6 days per week from Tuesday - Sunday, Monday I have day off.<br>
                                    <i class="fas fa-exclamation-triangle"></i> I not streaming when it is launched a rocket on the same day and hour as me. (not count launches from China and Russia)<br>
                                    <i class="fas fa-exclamation-triangle"></i> The music from all games are been turned off due to licence copyrights.
                                </p>
                                <?php
                                $file = "calendar.json";
                                $data = file_get_contents($file);
                                $obj = json_decode($data);
                                ?>

                                <table class="table table-bordered table-dark fh5co-text-calendar">
                                    <thead>
                                        <tr>
                                            <th>Timezone</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Saturday</th>
                                            <th>Sunday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td><i class="fas fa-times"></i></td>
                                            <td><i class="fas fa-check"></i></td>
                                            <td><i class="fas fa-check"></i></td>
                                            <td><i class="fas fa-check"></i></td>
                                            <td><i class="fas fa-check"></i></td>
                                            <td><i class="fas fa-check"></i></td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="calendar-c">Game</td>
                                            <td>
                                                <?php echo $obj[1]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[1]->icon; ?>.png" alt="<?php echo $obj[1]->name; ?>"/>
                                            </td>
                                            <td>
                                                <?php echo $obj[2]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[2]->icon; ?>.png" alt="<?php echo $obj[2]->name; ?>"/>
                                            </td>
                                            <td>
                                                <?php echo $obj[3]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[3]->icon; ?>.png" alt="<?php echo $obj[3]->name; ?>"/>
                                            </td>
                                            <td>
                                                <?php echo $obj[4]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[4]->icon; ?>.png" alt="<?php echo $obj[4]->name; ?>"/>
                                            </td>
                                            <td>
                                                <?php echo $obj[5]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[5]->icon; ?>.png" alt="<?php echo $obj[5]->name; ?>"/>
                                            </td>
                                            <td>
                                                <?php echo $obj[6]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[6]->icon; ?>.png" alt="<?php echo $obj[6]->name; ?>"/>
                                            </td>
                                            <td>
                                                <?php echo $obj[7]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[7]->icon; ?>.png" alt="<?php echo $obj[7]->name; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>EEST/EEST</td>
                                            <td><i class="fas fa-asterisk fa-xs"></i></td>
                                            <td><i class="far fa-clock"></i> 5PM</td>
                                            <td><i class="far fa-clock"></i> 5PM</td>
                                            <td><i class="far fa-clock"></i> 5PM</td>
                                            <td><i class="far fa-clock"></i> 5PM</td>
                                            <td><i class="far fa-clock"></i> 5PM</td>
                                            <td><i class="far fa-clock"></i> 5PM</td>
                                        </tr>
                                        <tr>
                                            <td>UTC</td>
                                            <td><i class="fas fa-asterisk fa-xs"></i></td>
                                            <td><i class="far fa-clock"></i> 3PM</td>
                                            <td><i class="far fa-clock"></i> 3PM</td>
                                            <td><i class="far fa-clock"></i> 3PM</td>
                                            <td><i class="far fa-clock"></i> 3PM</td>
                                            <td><i class="far fa-clock"></i> 3PM</td>
                                            <td><i class="far fa-clock"></i> 3PM</td>
                                        </tr>
                                        <tr>
                                            <td>EDT/EDT</td>
                                            <td><i class="fas fa-asterisk fa-xs"></i></td>
                                            <td><i class="far fa-clock"></i> 10AM</td>
                                            <td><i class="far fa-clock"></i> 10AM</td>
                                            <td><i class="far fa-clock"></i> 10AM</td>
                                            <td><i class="far fa-clock"></i> 10AM</td>
                                            <td><i class="far fa-clock"></i> 10AM</td>
                                            <td><i class="far fa-clock"></i> 10AM</td>
                                        </tr>
                                        <tr>
                                            <td>PST/PDT</td>
                                            <td><i class="fas fa-asterisk fa-xs"></i></td>
                                            <td><i class="far fa-clock"></i> 7AM</td>
                                            <td><i class="far fa-clock"></i> 7AM</td>
                                            <td><i class="far fa-clock"></i> 7AM</td>
                                            <td><i class="far fa-clock"></i> 7AM</td>
                                            <td><i class="far fa-clock"></i> 7AM</td>
                                            <td><i class="far fa-clock"></i> 7AM</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>
                                    Legend:<br>
                                    <i class="fas fa-times fa-fw"></i> - is mean the streaming has been canceled for today<br>
                                    <i class="fas fa-asterisk fa-fw"></i> - is mean can be streaming, without mention of start hour<br>
                                    <i class="fas fa-random fa-fw"></i> - is mean can be random game without announcement
                                </p>
                            </div>
                        </div>
                        <div class="row animate-box row-bottom-padded-sm">
                            <div class="col-md-3">
                                <h3 class="fh5co-section-heading" id="games"><span class="fh5co-number">N<sup>o</sup> 2</span> Games</h3>
                            </div>
                            <div class="col-md-9">
                                <p>My Steam wishlist <a href="https://store.steampowered.com/wishlist/id/mvt3am"><img src="<?php echo BASE_HREF;?>assets/misc/steam_transparent.png" width="160px" height="35px" alt="Steam"/></a> , some of those games I have it already but I want to have on my steam account! If you have steam key send me PM on my discord server! Thank you.</p>
                                <h3>My Games</h3>
                                <table class="table table-bordered table-dark fh5co-text-calendar">
                                    <thead>
                                        <tr>
                                            <th>Store</th>
                                            <th>Game</th>
                                            <th>Multiplayer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Euro Truck Simulator 2</td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>American Truck Simulator</td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>
                                                Workers & Resources: Soviet Republic<br><div class="note">I play with 99.8% of all mods from workshop without Maps because I not need them.</div>
                                                <div class="video-series">
                                                    Video Series:
                                                    <a class="fa-solid fa-plus-minus" data-bs-toggle="collapse" href="#wrsr" role="button" aria-expanded="false" aria-controls="wrsr"></a>
                                                    <br>
                                                    <div class="collapse collapse-video-series" id="wrsr">
                                                        <div class="card card-body card-video-series">
                                                            <a href="https://www.youtube.com/playlist?list=PLHJrf1Xjvhg8Kw5s3NvsHUedxnhYvyUVI">The New Country</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fas fa-times"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Tomb Raider
                                                <ul style="text-align: left;">
                                                    <li>Tomb Raider I (1996)</li>
                                                    <li>Tomb Raider II (1997)</li>
                                                    <li>Tomb Raider III - Adventures of Lara Croft (1998)</li>
                                                    <li>Tomb Raider: The Last Revelation (1999)</li>
                                                    <li>Tomb Raider (2000)</li>
                                                    <li>Tomb Raider: Chronicles (2000)</li>
                                                    <li>Tomb Raider VI: The Angel of Darkness (2003)</li>
                                                    <li>Tomb Raider: Legend (2006)</li>
                                                    <li>Tomb Raider: Anniversary (2007)</li>
                                                    <li>Tomb Raider: Underworld (2008)</li>
                                                    <li>Lara Croft and the Guardian of Light (2010)</li>
                                                    <li>Lara Croft and the Temple of Osiris (2014)</li>
                                                    <li>Lara Croft GO (2015)</li>
                                                    <li>Rise of Tomb Raider (2015)</li>
                                                    <li>Shadow of the Tomb Raider: Definitive Edition (2018)</li>
                                                </ul>
                                            </td>
                                            <td><i class="fas fa-times"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Farming Simulator
                                                <ul style="text-align: left;">
                                                    <li>Farming Simulator 2011</li>
                                                    <li>Farming Simulator 2013</li>
                                                    <li>Farming Simulator 2015</li>
                                                    <li>Farming Simulator 2017</li>
                                                    <li>Farming Simulator 2019 (<a href="mods/fs19">mods</a>)</li>
                                                </ul>
                                            </td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Construction Simulator 2015</td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Counter-Strike</td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Counter-Strike: Source</td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Subnautica</td>
                                            <td><i class="fas fa-times"></i></td>
                                        </tr>
                                        <tr>
                                            <td><span class="iconify-inline" data-icon="mdi:origin" style="color: #f56c2d;" data-width="25" data-height="25"></span></td>
                                            <td>
                                                The Sims 4<br>
                                                <div class="video-series">
                                                    Video Series:
                                                    <a class="fa-solid fa-plus-minus" data-bs-toggle="collapse" href="#thesims4" role="button" aria-expanded="false" aria-controls="thesims4"></a>
                                                    <br>
                                                    <div class="collapse collapse-video-series" id="thesims4">
                                                        <div class="card card-body card-video-series">
                                                            <a href="https://www.youtube.com/playlist?list=PLHJrf1Xjvhg9SmzfdmfEyGL8FXHCIQsr7">The Dynasty</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fas fa-times"></i></td>
                                        </tr>
                                        <tr>
                                            <td><span class="iconify" data-icon="mdi:gog" style="color: #fff;" data-width="25" data-height="25"></span></td>
                                            <td>Kerbal Space Program (<a href="mods/ksp">mods</a>)</td>
                                            <td><i class="fas fa-times"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
