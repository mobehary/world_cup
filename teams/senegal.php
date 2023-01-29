<?php $title = "Senegal";
      $primary_color = "#ffffff";
      $secondary_color = "#00632C";
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
            <div class="col-sm-6 col-md-3 col-lg-4 coatch-profile">
                <img src="../assets/Images/Flags/Senegal.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Senegal</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> CAF</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 20</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 3</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Sadio Mané (34)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Henri Camara / Idrissa Gueye (99)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Aliou Cissé</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Kalidou Koulibaly</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Senegal.png" height="250px" alt="">
            </div>
        </div>
        <div class="row honors-row">
            <div class="col-sm-6 col-md-12 col-lg-12 thropy-owl">
                <h1 class="main-title mb-3">Honors</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <img src="../assets/Images/Thropy/can.png" alt="">
                                <h5>Africa Cup of Nations</h5>
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
                                        <td>2021</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>2002, 2019</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>1965, 1990, 2006</td>
                                        <td>3</td>
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
                        <img src="../assets/Images/Coatchs/senegal.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Aliou Cissé<span class="age float-end">Age: 46</span></h4>
                            <h6 class="player-info text-start">Nationality: Senegal</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Seny Dieng <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Queens Park Rangers</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Édouard Mendy <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Chelsea</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alfred Gomis <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Rennes</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Formose Mendy<span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Amiens</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Kalidou Koulibaly <span>(C)</span><span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Chelsea</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Pape Abou Cissé <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Olympiacos</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Cheikhou Kouyaté <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Nottingham Forest</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Moussa N'Diaye <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Anderlecht</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Fodé Ballo-Touré <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Milan</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ismail Jakobs <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Monaco</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Youssouf Sabaly <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Real Betis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Abdou Diallo <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">RB Leipzig</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Moustapha Name <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Pafos</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Idrissa Gueye <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Everton</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nampalys Mendy <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Leicester City</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Pathé Ciss <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Rayo Vallecano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Krépin Diatta <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Monaco</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Pape Matar Sarr<span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Tottenham Hotspur</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mamadou Loum <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Reading</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Pape Gueye <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Marseille</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nicolas Jackson <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Villarreal</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Boulaye Dia <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Salernitana</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Iliman Ndiaye <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Sheffield United</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ismaïla Sarr<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Watford</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Famara Diédhiou <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Alanyaspor</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Senegal/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bamba Dieng <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Marseille</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>