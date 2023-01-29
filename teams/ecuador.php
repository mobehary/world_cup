<?php $title = "Ecuador";
      $primary_color = "#001C54";
      $secondary_color = "#FFE80B";
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
                <img src="../assets/Images/Flags/ecuador.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Team:</span> Ecuador</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Confederation:</span> CONMEBOL</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Current FIFA Rank:</span> 46</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Appearance in World Cup:</span> 4</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Top Scorer:</span> Enner Valencia (38)</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Most caps:</span> Iván Hurtado (168)</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Coatch:</span> Gustavo Alfaro</h5>
                <h5 class="team-det"><span style="color: <?= $primary_color?>">Captain:</span> Enner Valencia</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Ecuador.png" height="250px" alt="">
            </div>
        </div>
        <div class="row honors-row">
            <div class="col-sm-6 col-md-12 col-lg-12 thropy-owl">
                <h1 class="main-title mb-3">Honors</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <img src="../assets/Images/Thropy/copa america.png" alt="">
                                <h5>Copa América</h5>
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
                                        <td>1959, 1993</td>
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
                        <img src="../assets/Images/Coatchs/ecuador.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gustavo Alfaro<span class="age float-end">Age: 60</span></h4>
                            <h6 class="player-info text-start">Nationality: Argentina</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Hernán Galíndez <span class="age float-end">Age: 35</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Aucas</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Moisés Ramírez <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Independiente del Valle</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alexander Domínguez <span class="age float-end">Age: 35</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">LDU Quito</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Félix Torres<span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Santos Laguna</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Piero Hincapié <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Bayer Leverkusen</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Robert Arboleda <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">São Paulo</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">William Pacho <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Antwerp</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Pervis Estupiñán <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Brighton & Hove Albion</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Xavier Arreaga <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Seattle Sounders FC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ángelo Preciado <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Genk</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Diego Palacios <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Los Angeles FC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jackson Porozo <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Troyes</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">José Cifuentes <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Los Angeles FC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Carlos Gruezo <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">FC Augsburg</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ayrton Preciado <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Santos Laguna</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Romario Ibarra <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Pachuca</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ángel Mena<span class="age float-end">Age: 34</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">León</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jeremy Sarmiento <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Brighton & Hove Albion</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gonzalo Plata <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Valladolid</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Sebas Méndez <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Los Angeles FC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alan Franco <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Talleres</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Moisés Caicedo <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Brighton & Hove Albion</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $primary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Michael Estrada <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Cruz Azul</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Enner Valencia <span>(C)</span><span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Fenerbahçe</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Djorkaeff Reasco <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Newell's Old Boys</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ecuador/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Kevin Rodríguez<span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Imbabura</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>