<?php $title = "Croatia";
      $primary_color = "#FFFFFF";
      $secondary_color = "#EE161F";
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
                <img src="../assets/Images/Flags/Croatia.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Croatia</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> UEFA</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 16</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 6</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Davor Šuker (45)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Luka Modrić (162)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Zlatko Dalić</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Luka Modrić</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Croatia.png" height="250px" alt="">
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
                                        <td>2018</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>1998, 2022</td>
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
                </div>
            </div>
        </div>
        <div class="squad text-center">
            <h1 class="main-title">Squad</h1>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Coatch</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Coatchs/croatia.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Zlatko Dalić<span class="age float-end">Age: 56</span></h4>
                            <h6 class="player-info text-start">Nationality: Croatia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Dominik Livaković <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Dinamo Zagreb</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ivo Grbić <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Atlético Madrid</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ivica Ivušić<span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Osijek</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Josip Stanišić<span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Bayern Munich</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Borna Barišić <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Rangers</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Martin Erlić <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Sassuolo</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Dejan Lovren <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Zenit Saint Petersburg</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Borna Sosa <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">VfB Stuttgart</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Joško Gvardiol <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">RB Leipzig</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Domagoj Vida <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">AEK Athens</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Josip Juranović <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Celtic</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Josip Šutalo <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Dinamo Zagreb</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Lovro Majer <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Rennes</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mateo Kovačić<span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Chelsea</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Luka Modrić <span>(C)</span> <span class="age float-end">Age: 37</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Real Madrid</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Marcelo Brozović<span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Internazionale</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nikola Vlašić<span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Torino</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mario Pašalić <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Atalanta</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Luka Sučić <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Red Bull Salzburg</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Kristijan Jakić <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Eintracht Frankfurt</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ivan Perišić<span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Tottenham Hotspur</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Andrej Kramarić<span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">1899 Hoffenheim</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Marko Livaja <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Hajduk Split</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bruno Petković<span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Dinamo Zagreb</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ante Budimir <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Osasuna</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Croatia/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mislav Oršić <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Dinamo Zagreb</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>