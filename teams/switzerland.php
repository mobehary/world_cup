<?php $title = "Switzerland";
      $primary_color = "#FFFFFF";
      $secondary_color = "#DB2416";
include '../includes/inner-header.php'
?>
<style>
    body .squad .owl-next span{
        color: <?= $secondary_color?>
    }
    body .squad .owl-prev span{
        color: <?= $secondary_color?>
    }
</style>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-4">
                <img src="../assets/Images/Flags/switzerland.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Switzerland</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> UEFA</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 14</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 12</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Alexander Frei (42)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Heinz Hermann (118)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Murat Yakin</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Granit Xhaka</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Switzerland.png" height="250px" alt="">
            </div>
        </div>
        <div class="row honors-row">
            <div class="col-sm-6 col-md-12 col-lg-12 thropy-owl">
                <h1 class="main-title mb-3">Honors</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <img src="../assets/Images/Thropy/nations league.png" alt="">
                                <h5>UEFA Nations League</h5>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9 table-responsive">
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <td>Rank</td>
                                        <td>Years</td>
                                        <td>Times</td>
                                    </thead>
                                    <tr>
                                        <td style="background-color: gold; font-weight: bolder;">Champion</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>2019</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="squad text-center">
            <h1 class="main-title">Squad</h1>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Coatch</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Coatchs/switzerland.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Murat Yakin<span class="age float-end">Age: 48</span></h4>
                            <h6 class="player-info text-start">Nationality: Switzerland</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Yann Sommer <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">B. Mönchengladbach</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jonas Omlin <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Montpellier</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gregor Kobel<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Borussia Dortmund</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Philipp Köhn<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Red Bull Salzburg</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Edimilson Fernandes<span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Mainz 05</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Silvan Widmer <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Mainz 05</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nico Elvedi <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">B. Mönchengladbach</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Manuel Akanji <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Manchester City</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Renato Steffen <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Lugano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ricardo Rodriguez <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Torino</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Eray Cömert <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Valencia</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Fabian Schär <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Newcastle United</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Denis Zakaria <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Chelsea</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Remo Freuler<span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Nottingham Forest</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Granit Xhaka <span>(C)</span> <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Arsenal</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Michel Aebischer<span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Bologna</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Djibril Sow<span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Eintracht Frankfurt</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Christian Fassnacht <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Young Boys</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Fabian Frei <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Basel</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Xherdan Shaqiri <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Chicago Fire FC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Fabian Rieder <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Young Boys</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ardon Jashari <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Luzern</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Breel Embolo<span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Monaco</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Haris Seferovic<span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Galatasaray</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ruben Vargas <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">FC Augsburg</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Switzerland/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Noah Okafor<span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Red Bull Salzburg</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>