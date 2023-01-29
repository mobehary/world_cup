<?php $title = "Qatar";
      $primary_color = "#ffffff";
      $secondary_color = "#831435";
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
                <img src="../assets/Images/Flags/qatar.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> Qatar</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> AFC</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 51</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 1</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Mansoor Muftah / Almoez Ali (42)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> Hassan Al-Haydos (172)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Félix Sánchez</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Hassan Al-Haydos</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Qatar.png" height="250px" alt="">
            </div>
        </div>
        <div class="row honors-row">
            <div class="col-sm-6 col-md-12 col-lg-12 thropy-owl">
                <h1 class="main-title mb-3">Honors</h1>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <img src="../assets/Images/Thropy/asian.png" alt="">
                                <h5>AFC Asian Cup</h5>
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
                                        <td>2019</td>
                                        <td>1</td>
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
                                <img src="../assets/Images/Thropy/concacaf.png" alt="">
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
                                        <td>2021</td>
                                        <td>1</td>
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
                        <img src="../assets/Images/Coatchs/qatar.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Félix Sánchez<span class="age float-end">Age: 47</span></h4>
                            <h6 class="player-info text-start">Nationality: Spain</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Saad Al-Sheeb <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Yousef Hassan <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Al-Gharafa</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Meshaal Barsham <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ró-Ró<span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mohammed Waad <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Tarek Salman <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Musab Kheder <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Homam Ahmed <span class="age float-end">Age: 23</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Al-Gharafa</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Bassam Al-Rawi <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Boualem Khoukhi <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ismaeel Mohammad <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Abdelkarim Hassan <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Abdulaziz Hatem <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Al-Rayyan</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ali Assadalla<span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Hassan Al-Haydos <span>(C)</span><span class="age float-end">Age: 31</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Karim Boudiaf<span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Salem Al-Hajri <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Assim Madibo <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Naif Al-Hadhrami <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Al-Rayyan</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Jassem Gaber <span class="age float-end">Age: 20</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Al-Arabi</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/26.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mostafa Meshaal <span class="age float-end">Age: 21</span></h4>
                            <h6 class="player-info text-start">No: 26 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $secondary_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ahmed Alaaeldin<span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Al-Gharafa</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mohammed Muntari <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Akram Afif <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Al-Sadd</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Khalid Muneer<span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Al-Wakrah</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Qatar/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Almoez Ali <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Al-Duhail</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>