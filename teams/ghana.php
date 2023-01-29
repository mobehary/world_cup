<?php $title = "Ghana";
      $primary_color = "#FFFFFF";
      $secondary_color = "#000000";
      $font_color = "#006C3F";
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
                <img src="../assets/Images/Flags/ghana.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Ghana</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> CAF</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 61</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 4</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Asamoah Gyan (51)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> André Ayew (113)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Otto Addo</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> André Ayew</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Ghana.png" height="250px" alt="">
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
                                        <td>1963, 1965, 1978, 1982</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>1968, 1970, 1992, 2010, 2015</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>2008</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>1996, 2012, 2013, 2017</td>
                                        <td>4</td>
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
                        <img src="../assets/Images/Coatchs/ghana.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Otto Addo<span class="age float-end">Age: 47</span></h4>
                            <h6 class="player-info text-start">Nationality: Ghana</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Lawrence Ati-Zigi <span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">St. Gallen</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ibrahim Danlad <span class="age float-end">Age: 19</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Asante Kotoko</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Abd.Manaf Nurudeen <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Eupen</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Tariq Lamptey<span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Brighton & Hove Albion</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Denis Odoi <span class="age float-end">Age: 34</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Club Brugge</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mohammed Salisu<span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Southampton</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Gideon Mensah <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Auxerre</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Joseph Aidoo <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Celta Vigo</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Baba Rahman <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Reading</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Daniel Amartey <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Leicester City</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alexander Djiku <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Strasbourg</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alidu Seidu <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Clermont</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Thomas Partey<span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Arsenal</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Elisha Owusu<span class="age float-end">Age: 25</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Gent</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Abd. Fatawu Issahaku <span class="age float-end">Age: 18</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Sporting CP</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Daniel-Kofi Kyereh<span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">SC Freiburg</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Osman Bukari <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Red Star Belgrade</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Daniel Afriyie <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Hearts of Oak</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mohammed Kudus <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Ajax</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Salis Abdul Samed <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Lens</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Kamaldeen Sulemana <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Rennes</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Kamal Sowah <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Club Brugge</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jordan Ayew <span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Crystal Palace</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">André Ayew <span>(C)</span><span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Iñaki Williams <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Athletic Bilbao</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Ghana/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Antoine Semenyo <span class="age float-end">Age: 22</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Bristol City</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>