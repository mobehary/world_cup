<?php $title = "Morocco";
      $primary_color = "#006230";
      $secondary_color = "#C22229";
      $font_color = "#fff";
include '../includes/inner-header.php'
?>
<style>
    body .squad .owl-next span{
        color: <?= $primary_color?>
    }
    body .squad .owl-prev span{
        color: <?= $primary_color?>
    }
</style>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-4">
                <img src="../assets/Images/Flags/morocco.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Morocco</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> CAF</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 24</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 6</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Ahmed Faras (36)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Noureddine Naybet (115)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Walid Regragui</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Romain Saïss</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div coatch-profile">
                <img src="../assets/Images/Logos/Morocco.png" height="250px" alt="">
            </div>
        </div>
        <div class="row honors-row">
            <div class="col-sm-6 col-md-12 col-lg-12 thropy-owl">
                <h1 class="main-title mb-3">Honors</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <img src="../assets/Images/Thropy/world cup.png" alt="">
                                <h5>FIFA World Cup</h5>
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
                                        <td>2022</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
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
                                        <td>1976</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>2004</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>1980</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>1986, 1988</td>
                                        <td>2</td>
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
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Coatch</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Coatchs/morocco.jpg" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Walid Regragui<span class="age float-end">Age: 47</span></h4>
                            <h6 class="player-info text-start">Nationality: Morocco</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Yassine Bounou <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Sevilla</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Munir Mohamedi <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Al-Wehda</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Ahmed R. Tagnaouti <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Wydad AC</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Achraf Hakimi<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Paris Saint-Germain</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Noussair Mazraoui <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Bayern Munich</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Nayef Aguerd <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">West Ham United</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Romain Saïss <span>(C)</span><span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Beşiktaş</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Jawad El Yamiq <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Valladolid</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Achraf Dari <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Brest</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Badr Benoun <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Qatar SC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Yahia Attiyat Allah <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Wydad AC</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Sofyan Amrabat<span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Fiorentina</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Hakim Ziyech<span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Chelsea</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Azzedine Ounahi <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Angers</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Anass Zaroury<span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Burnley</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Ilias Chair <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Queens Park Rangers</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Zakaria Aboukhlal <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Toulouse</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Selim Amallah <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Standard Liège</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Sofiane Boufal <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Angers</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Bilal El Khannous <span class="age float-end">Age: 18</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Genk</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Yahya Jabrane <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Wydad AC</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Abd. Hamdallah <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Al-Ittihad</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Abdelhamid Sabiri <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Sampdoria</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Abde Ezzalzouli <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Osasuna</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Youssef En-Nesyri <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Sevilla</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Morocco/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $font_color?>">
                            <h4 class="player-name text-start">Walid Cheddira<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Bari</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>