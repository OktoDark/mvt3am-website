        <title>Donation Box | <?php echo $siteName;?></title>
    </head>
    <body>
    <div class="fh5co-loader"></div>
    <div id="fh5co-page">
        <nav id="fh5co-nav" role="navigation">
            <ul>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>home" class="transition">Home</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>stream" class="transition">Stream</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>contest" class="transition">Contest</a></li>
                <li class="animate-box fh5co-active"><a href="<?php echo BASE_HREF;?>donation_box" class="transition">Donation Box</a></li>
                <li class="animate-box"><a href="<?php echo BASE_HREF;?>about" class="transition">About</a></li>
            </ul>
        </nav>
        <header id="fh5co-header" role="banner" class="fh5co-project js-fh5co-waypoint no-border" data-colorbg="#222222" data-next="yes">
            <div class="container">
                <div class="fh5co-text-wrap animate-box">
                    <div class="fh5co-intro-text">
                        <h1>Donation Box</h1>
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
                                <h3 class="fh5co-section-heading"><span class="fh5co-number">N<sup>o</sup> 1</span> About</h3>
                            </div>
                            <div class="col-md-9">
                                What is the Donation Box?!<br>
                                The Donation Box it is for helping me to keep the stream online for every month.<br>
                                This bar will be filled only with &euro; not with percent!<br>
                                For every stage completed will I open a box, or I close it, totally depend on every month.<br>
                                <i>Example:</i> I can increase stream from 2 hours to 3-4 hours every day. (see section stages for more information)
                                <br>
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="HZ3EC636WYMBN">
                                    <table>
                                        <tr>
                                            <td><input type="hidden" name="on0" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select name="os0">
                                                    <option value="Bronze">Bronze : €2.00 EUR - monthly</option>
                                                    <option value="Silver">Silver : €4.00 EUR - monthly</option>
                                                    <option value="Gold">Gold : €6.00 EUR - monthly</option>
                                                    <option value="Platinum">Platinum : €8.00 EUR - monthly</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="currency_code" value="EUR">
                                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form>
                            </div>
                        </div>
                        <div class="row animate-box row-bottom-padded-sm">
                            <div class="col-md-3">
                                <h3 class="fh5co-section-heading"><span class="fh5co-number">N<sup>o</sup> 2</span> <i class="fas fa-box"></i></h3>
                            </div>
                            <div class="col-md-9">
                                <p>Keep the bar filled for stage reward.</p>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-striped db" role="progressbar" style="width: 0;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0</div>
                                 </div>
                            </div>
                        </div>
                        <div class="row animate-box row-bottom-padded-sm">
                            <div class="col-md-3">
                                <h3 class="fh5co-section-heading"><span class="fh5co-number">N<sup>o</sup> 3</span> Stages</h3>
                            </div>
                            <div class="col-md-9">
                                Where we are?
                               <table class="table table-bordered table-dark fh5co-text-calendar" style="width: 60%">
                                    <thead>
                                        <tr>
                                            <td style="background-color: green;">0 &euro;</td>
                                            <td>Closed Box</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10 &euro;</td>
                                            <td><i class="fas fa-dice-one"></i> <i class="far fa-clock"></i> increased</td>
                                        </tr>
                                        <tr>
                                            <td>30 &euro;</td>
                                            <td><i class="fas fa-dice-two"></i> <i class="far fa-clock"></i> increased</td>
                                        </tr>
                                        <tr>
                                            <td>50 &euro;</td>
                                            <td><i class="fas fa-microphone"></i> <span style="color: green;"><i class="fas fa-power-off"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>70 &euro;</td>
                                            <td><i class="fas fa-video"></i> <span style="color: green;"><i class="fas fa-power-off"></i></span></td>
                                        </tr>
                                        <tr>
                                            <td>100 &euro;</td>
                                            <td><i class="fas fa-parachute-box"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Note: Information can be changed without notice!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
