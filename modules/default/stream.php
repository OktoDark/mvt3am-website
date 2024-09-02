        <title>Stream | <?php echo $siteName;?></title>
    </head>
    <body>
    <div class="fh5co-loader"></div>
    <div id="fh5co-page">
        <nav id="fh5co-nav" role="navigation">
            <ul>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>home" class="transition">Home</a></li>
                <li class="animate-box fh5co-active"><a href="<?php echo BASE_HREF;?>stream" class="transition">Stream</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>support" class="transition"><i class="fa-regular fa-heart fa-beat" style="color: #ff0000;"></i> Support</a></li>
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
                <a href="#" class="scroll-btn"><span>See the detail</span><i class="fa-solid fa-chevron-down"></i></a>
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
                                    I do stream only 6 days per week from Tuesday - Sunday, Monday I have day off.<br>
                                    <i class="fas fa-exclamation-triangle"></i> I not stream when it is launched a rocket on the same day and hour as me. (not count launches from China, India and Russia or from Companies of Rocket Lab, Virgin Galactic)<br>
                                    <i class="fas fa-exclamation-triangle"></i> The music from all games are been turned <b>off</b> due to licence copyrights.<br>
                                    <i class="fas fa-exclamation-triangle"></i> <i class="fa-sharp fa-solid fa-square" style="color: #ff0000;"></i> at top 4 Hours Marathon stream.
                                </p>
                                <?php
                                $data = file_get_contents("calendar.json");
                                $obj = json_decode($data);

                                /** DLCs Load File **/
                                $dlcs_data = file_get_contents("dlcs.json");
                                /** American Truck Simulator **/
                                $dlcs_ats_map = json_decode($dlcs_data)->ats_maps;
                                $dlcs_ats_cp = json_decode($dlcs_data)->ats_cargo_packs;
                                $dlcs_ats_tp = json_decode($dlcs_data)->ats_tuning_packs;
                                $dlcs_ats_pt = json_decode($dlcs_data)->ats_paint_themes;
                                $dlcs_ats_free_dlcs = json_decode($dlcs_data)->ats_free_dlcs;
                                /** Euro Truck Simulator **/
                                $dlcs_ets_map = json_decode($dlcs_data)->ets_maps;
                                $dlcs_ets_cp = json_decode($dlcs_data)->ets_cargo_packs;
                                $dlcs_ets_tp = json_decode($dlcs_data)->ets_trailer_packs;
                                $dlcs_ets_tca = json_decode($dlcs_data)->ets_tuning_cabin_accessories;
                                $dlcs_ets_pt = json_decode($dlcs_data)->ets_paint_themes;
                                $dlcs_ets_pjne = json_decode($dlcs_data)->ets_paint_jobs_northern_europe;
                                $dlcs_ets_pjce = json_decode($dlcs_data)->ets_paint_jobs_central_europe;
                                $dlcs_ets_pjwe = json_decode($dlcs_data)->ets_paint_jobs_western_europe;
                                $dlcs_ets_pjse = json_decode($dlcs_data)->ets_paint_jobs_southern_europe;
                                $dlcs_ets_pjee = json_decode($dlcs_data)->ets_paint_jobs_eastern_europe;
                                $dlcs_ets_pjoc = json_decode($dlcs_data)->ets_paint_jobs_other_countries;
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
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[1]->icon; ?>.png" alt="<?php echo $obj[1]->name; ?>">
                                            </td>
                                            <td>
                                                <?php echo $obj[2]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[2]->icon; ?>.png" alt="<?php echo $obj[2]->name; ?>">
                                            </td>
                                            <td>
                                                <?php echo $obj[3]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[3]->icon; ?>.png" alt="<?php echo $obj[3]->name; ?>">
                                            </td>
                                            <td>
                                                <?php echo $obj[4]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[4]->icon; ?>.png" alt="<?php echo $obj[4]->name; ?>">
                                            </td>
                                            <td>
                                                <?php echo $obj[5]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[5]->icon; ?>.png" alt="<?php echo $obj[5]->name; ?>">
                                            </td>
                                            <td>
                                                <?php echo $obj[6]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[6]->icon; ?>.png" alt="<?php echo $obj[6]->name; ?>">
                                            </td>
                                            <td>
                                                <?php echo $obj[7]->warning; ?>
                                                <img src="<?php echo BASE_HREF;?>assets/games_covers/<?php echo $obj[7]->icon; ?>.png" alt="<?php echo $obj[7]->name; ?>">
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
                                    <i class="fas fa-times fa-fw"></i> - is mean the stream has been canceled for today<br>
                                    <i class="fas fa-asterisk fa-fw"></i> - is mean can stream without mention of start hour<br>
                                    <i class="fas fa-random fa-fw"></i> - is mean can be random game without announcement
                                </p>
                            </div>
                        </div>
                        <div class="row animate-box row-bottom-padded-sm">
                            <div class="col-md-3">
                                <h3 class="fh5co-section-heading" id="games"><span class="fh5co-number">N<sup>o</sup> 2</span> Games</h3>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    My <a href="https://store.steampowered.com/wishlist/id/mvt3am"><i class="fa-brands fa-steam"></i> wishlist</a>. If you want to donate steam keys send me DM on my discord server to complete my game list! Thank you.<br>
                                    <br><b>Multiplayer</b><br>
                                    Some games can be played in multiplayer or not (see <i>My Games</i> list) for that please join to our Discord server for more details about How to connect in multiplayer, because some games "room" require password to enter or mods must have it to can play.
                                    <br>
                                    If the stream title has <b>!multi</b> and <b><i class="fas fa-check"></i></b> in the game list that mean we can play in multiplayer mode.
                                </p>
                                <h3>My Games</h3>
                                <table class="table table-bordered table-dark fh5co-text-calendar">
                                    <thead>
                                        <tr>
                                            <th><i class="fa-solid fa-store"></i></th>
                                            <th>Game</th>
                                            <th><i class="fa-solid fa-users-rectangle"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>Euro Truck Simulator 2
                                                <div class="note">I play with almost all DLCs.</div>
                                                <div class="dlcs">
                                                    DLCs <a class="fa-solid fa-plus-minus" data-bs-toggle="collapse" href="#etsdlcs" role="button" aria-expanded="false" aria-controls="etsdlcs"></a><br>
                                                    <div class="collapse collapse-card-dlcs" id="etsdlcs">
                                                        <div class="card card-body card-dlcs">
                                                            <span>Maps</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                <?php
                                                                foreach($dlcs_ets_map as $ets_map) { ?>
                                                                    <div class="col"><img src="assets/games/ets/maps/<?php echo $ets_map->map;?>.png" class="dlcs_resize" alt="<?php echo $ets_map->map;?>"></div>
                                                                <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Cargo Packs</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_cp as $ets_cargo_packs) { ?>
                                                                        <div class="col"><img src="assets/games/ets/cp/<?php echo $ets_cargo_packs->cp;?>.png" class="dlcs_resize" alt="<?php echo $ets_cargo_packs->cp;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Trailer Packs</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_tp as $ets_trailer_packs) { ?>
                                                                        <div class="col"><img src="assets/games/ets/tp/<?php echo $ets_trailer_packs->tp;?>.png" class="dlcs_resize" alt="<?php echo $ets_trailer_packs->tp;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Tuning & Cabin Accessories</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_tca as $ets_tuning_cabin_accessories) { ?>
                                                                        <div class="col"><img src="assets/games/ets/tca/<?php echo $ets_tuning_cabin_accessories->tca;?>.png" class="dlcs_resize" alt="<?php echo $ets_tuning_cabin_accessories->tca;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Themes</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pt as $ets_paint_themes) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pt/<?php echo $ets_paint_themes->pt;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_themes->pt;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Jobs - Northern Europe</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pjne as $ets_paint_jobs_northern_europe) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pjne/<?php echo $ets_paint_jobs_northern_europe->pjne;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_jobs_northern_europe->pjne;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Jobs - Central Europe</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pjce as $ets_paint_jobs_central_europe) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pjce/<?php echo $ets_paint_jobs_central_europe->pjce;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_jobs_central_europe->pjce;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Jobs - Western Europe</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pjwe as $ets_paint_jobs_western_europe) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pjwe/<?php echo $ets_paint_jobs_western_europe->pjwe;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_jobs_western_europe->pjwe;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Jobs - Southern Europe</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pjse as $ets_paint_jobs_southern_europe) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pjse/<?php echo $ets_paint_jobs_southern_europe->pjse;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_jobs_southern_europe->pjse;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Jobs - Eastern Europe</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pjee as $ets_paint_jobs_eastern_europe) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pjee/<?php echo $ets_paint_jobs_eastern_europe->pjee;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_jobs_eastern_europe->pjee;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Jobs - Other Countries</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ets_pjoc as $ets_paint_jobs_other_countries) { ?>
                                                                        <div class="col"><img src="assets/games/ets/pjoc/<?php echo $ets_paint_jobs_other_countries->pjoc;?>.png" class="dlcs_resize" alt="<?php echo $ets_paint_jobs_other_countries->pjoc;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fab fa-steam"></i></td>
                                            <td>American Truck Simulator
                                                <div class="note">I play with almost all DLCs.</div>
                                                <div class="dlcs">
                                                    DLCs <a class="fa-solid fa-plus-minus" data-bs-toggle="collapse" href="#atsdlcs" role="button" aria-expanded="false" aria-controls="atsdlcs"></a><br>
                                                    <div class="collapse collapse-card-dlcs" id="atsdlcs">
                                                        <div class="card card-body card-dlcs">
                                                            <span>Maps</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ats_map as $ats_map) { ?>
                                                                        <div class="col"><img src="assets/games/ats/maps/<?php echo $ats_map->map;?>.png" class="dlcs_resize" alt="<?php echo $ats_map->map;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Cargo Packs</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ats_cp as $ats_cargo_packs) { ?>
                                                                        <div class="col"><img src="assets/games/ats/cp/<?php echo $ats_cargo_packs->cp;?>.png" class="dlcs_resize" alt="<?php echo $ats_cargo_packs->cp;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Tuning Packs</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ats_tp as $ats_tuning_packs) { ?>
                                                                        <div class="col"><img src="assets/games/ats/tp/<?php echo $ats_tuning_packs->tp;?>.png" class="dlcs_resize" alt="<?php echo $ats_tuning_packs->tp;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Paint Themes</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ats_pt as $ats_paint_themes) { ?>
                                                                        <div class="col"><img src="assets/games/ats/pt/<?php echo $ats_paint_themes->pt;?>.png" class="dlcs_resize" alt="<?php echo $ats_paint_themes->pt;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-body card-dlcs">
                                                            <span>Free DLCs</span>
                                                            <div class="container text-center">
                                                                <div class="row row-cols-3">
                                                                    <?php
                                                                    foreach($dlcs_ats_free_dlcs as $ats_free_dlcs) { ?>
                                                                        <div class="col"><img src="assets/games/ats/free_dlcs/<?php echo $ats_free_dlcs->free_dlcs;?>.png" class="dlcs_resize" alt="<?php echo $ats_free_dlcs->free_dlcs;?>"></div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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
                                                            <a href="https://www.youtube.com/playlist?list=PLHJrf1Xjvhg8Kw5s3NvsHUedxnhYvyUVI">The New Country (185 Parts Ending)</a>
                                                        </div>
                                                        <div class="card card-body card-video-series">
                                                            <a href="https://www.youtube.com/playlist?list=PLHJrf1Xjvhg_ka2RnV7DRzUPQmVxefZWU">Eprea Country (Streaming right now)</a>
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
                                                    <li>Farming Simulator 2011 (soon)</li>
                                                    <li>Farming Simulator 2013 (soon)</li>
                                                    <li>Farming Simulator 2015 (soon)</li>
                                                    <li>Farming Simulator 2017 (soon)</li>
                                                    <li>Farming Simulator 2019 (<a href="mods/fs19">mods</a>)</li>
                                                    <li>Farming Simulator 2022 (<a href="#">mods soon</a>)</li>
                                                    <li>Farming Simulator 2022 (<a href="game/fs22"><i class="fa-solid fa-circle-info"></i></a>)</li>
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
                                            <td>
                                                <i class="fab fa-steam"></i><br><br>
                                                <span class="iconify" data-icon="cib:epic-games" data-width="25" data-height="25"></span><br><br>
                                                <span class="iconify-inline" data-icon="mdi:origin" style="color: #f56c2d;" data-width="25" data-height="25"></span></td>
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
                                            <td>
                                                <span class="iconify" data-icon="mdi:gog" style="color: #fff;" data-width="25" data-height="25"></span><br>
                                                <span class="iconify" data-icon="cib:epic-games" data-width="25" data-height="25"></span>
                                            </td>
                                            <td>Kerbal Space Program (<a href="mods/ksp">mods</a>)</td>
                                            <td><i class="fas fa-times"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row animate-box row-bottom-padded-sm">
                            <div class="col-md-3">
                                <h3 class="fh5co-section-heading" id="games"><span class="fh5co-number">N<sup>o</sup> 3</span> Channel</h3>
                            </div>
                            <div class="col-md-9">
                                <p>
                                    If you do want to know some bots commands please visit this <a href="<?php echo BASE_HREF;?>chat_commands">page</a><br>
                                    For fun earn some points, more details here: <a href="<?php echo BASE_HREF;?>points_n_rewards" class="transition">Points and Rewards</a><br>
                                    We have some contest on our stream please check: <a href="<?php echo BASE_HREF;?>contest" class="transition">Contest</a><br>
                                    You do want some gifts enter here: <a href="" class="transition">Giveaways</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
