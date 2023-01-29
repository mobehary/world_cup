<?php $title = "Costa Rica";
      $primary_color = "#ED1720";
      $secondary_color = "#0B1E61";
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
                <img src="../assets/Images/Flags/costa rica.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Costa Rica</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> CONCACAF</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 31</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 6</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Rolando Fonseca (47)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Celso Borges (158)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Luis Fernando Suárez</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Bryan Ruiz</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Costa Rica.png" height="250px" alt="">
            </div>
        </div>
        <div class="row honors-row">
            <div class="col-sm-6 col-md-12 col-lg-12 thropy-owl">
                <h1 class="main-title mb-3">Honors</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3"><img src="../assets/Images/Thropy/concacaf.png" alt="">
                                <h5>CONCACAF Gold Cup</h5>
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
                                        <td>1963, 1969, 1989</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>2002</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>1965, 1971, 1985, 1993</td>
                                        <td>4</td>
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
                        <img src="../assets/Images/Coatchs/costa rica.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Luis Fernando Suárez<span class="age float-end">Age: 63</span></h4>
                            <h6 class="player-info text-start">Nationality: Colombia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Keylor Navas<span class="age float-end">Age: 35</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Paris Saint-Germain</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Esteban Alvarado<span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Herediano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Patrick Sequeira <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Lugo</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Juan Pablo Vargas<span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Millonarios</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Keysher Fuller <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Herediano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Óscar Duarte <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Al-Wehda</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bryan Oviedo <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Real Salt Lake</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gerardo Arteaga <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Konyaspor</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Carlos Martínez <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">San Carlos</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Kendall Waston <span class="age float-end">Age: 34</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Saprissa</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Rónald Matarrita <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">FC Cincinnati</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Daniel Chacón <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Cartaginés</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Celso Borges <span class="age float-end">Age: 34</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Alajuelense</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jewison Bennette <span class="age float-end">Age: 18</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Sunderland</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bryan Ruiz <span>(C)</span><span class="age float-end">Age: 37</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Alajuelense</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gerson Torres <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Herediano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Youstin Salas <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Saprissa</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Yeltsin Tejeda <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Herediano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Brandon Aguilera <span class="age float-end">Age: 19</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Guanacasteca</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Douglas López <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Herediano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Roan Wilson <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Municipal Grecia</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Anthony Hernández <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Puntarenas</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Álvaro Zamora <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Saprissa</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Anthony Contreras <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Herediano</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Johan Venegas <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Alajuelense</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Costa Rica/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Joel Campbell <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">León</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>