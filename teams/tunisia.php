<?php $title = "Tunisia";
      $primary_color = "#ffffff";
      $secondary_color = "#E8000B";
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
                <img src="../assets/Images/Flags/tunisia.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Tunisia</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> CAF</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 35</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 6</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Issam Jemâa (36)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Radhi Jaïdi (105)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Jalel Kadri</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Youssef Msakni</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Tunisia.png" height="250px" alt="">
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
                                        <td>2004</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>1965, 1996</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>1962</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>1978, 2000, 2019</td>
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
                        <img src="../assets/Images/Coatchs/tunisia.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jalel Kadri<span class="age float-end">Age: 51</span></h4>
                            <h6 class="player-info text-start">Nationality: Tunisia</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Aymen Mathlouthi <span class="age float-end">Age: 38</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Étoile du Sahel</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Aymen Dahmen <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">CS Sfaxien</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bechir Ben Saïd <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">US Monastir</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mouez Hassen <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Club Africain</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bilel Ifa<span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Kuwait SC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Montassar Talbi <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Lorient</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Yassine Meriah <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Espérance de Tunis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Dylan Bronn <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Salernitana</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ali Maâloul <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Al Ahly</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mohamed Dräger <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Luzern</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Wajdi Kechrida <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Atromitos</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ali Abdi <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Caen</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Nader Ghandri <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Club Africain</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Hannibal Mejbri <span class="age float-end">Age: 19</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Birmingham City</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ferjani Sassi<span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Aïssa Laïdouni <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Ferencváros</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">M. Ali Ben Romdhane<span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Espérance de Tunis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ellyes Skhiri <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">1. FC Köln</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ghailene Chaalali <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Espérance de Tunis</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Youssef Msakni <span>(C)</span><span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Al-Arabi</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Issam Jebali <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">OB</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Wahbi Khazri <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Montpellier</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Taha Yassine Khenissi<span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Kuwait SC</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Seifeddine Jaziri <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Zamalek</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Naïm Sliti <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Al-Ettifaq</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Tunisia/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Anis Ben Slimane <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Brøndby</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>