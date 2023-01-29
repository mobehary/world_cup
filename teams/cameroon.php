<?php $title = "Cameroon";
      $primary_color = "#FCD20F";
      $secondary_color = "#007B5E";
      $font_color = "#CF0921";
include '../includes/inner-header.php'
?>
<style>
    body .squad .owl-next span{
        color: <?= $font_color?>
    }
    body .squad .owl-prev span{
        color: <?= $font_color?>
    }
</style>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-4">
                <img src="../assets/Images/Flags/cameroon.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Cameroon</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> CAF</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 37</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 8</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Samuel Eto'o (56)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Rigobert Song (137)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Rigobert Song</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Vincent Aboubakar</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Cameroon.png" height="250px" alt="">
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
                                        <td>1984, 1988, 2000, 2002, 2017</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>1986, 2008</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>1972, 2021</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <img src="../assets/Images/Thropy/confedration-cup.png" alt="">
                                <h5>FIFA Confederations Cup</h5>
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
                                        <td>2003</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>-</td>
                                        <td>0</td>
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
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Coatch</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Coatchs/cameroon.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Rigobert Song<span class="age float-end">Age: 46</span></h4>
                            <h6 class="player-info text-start">Nationality: Cameroon</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">S. Ngapandouetnbu <span class="age float-end">Age: 19</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Marseille</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Devis Epassy <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Abha</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">André Onana <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Internazionale</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jerome N. Mbekeli<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Colombe Sportive</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nicolas Nkoulou <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Aris</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Christopher Wooh <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Rennes</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Olivier Mbaizo <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Philadelphia Union</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Collins Fai <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Al-Tai</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">J. C. Castelletto <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Nantes</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Enzo Ebosse <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Udinese</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nouhou Tolo <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Seattle Sounders FC</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gaël Ondoua<span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Hannover 96</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">G-Kévin Nkoudou<span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Beşiktaş</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">André-F. Z. Anguissa <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Napoli</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Samuel Gouet<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Mechelen</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Pierre Kunde <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Olympiacos</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Martin Hongla <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Hellas Verona</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Olivier Ntcham <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Swansea City</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Souaibou Marou <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Coton Sport</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Moumi Ngamaleu<span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Dynamo Moscow</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jean-Pierre Nsame <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Young Boys</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Vincent Aboubakar<span>(C)</span><span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Al-Nassr</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Christian Bassogog<span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Shanghai Shenhua</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Karl Toko Ekambi <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Lyon</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">E. M. Choupo-Moting <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Bayern Munich</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Cameron/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bryan Mbeumo <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Brentford</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>