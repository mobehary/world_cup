<?php $title = "IR Iran";
      $primary_color = "#ffffff";
      $secondary_color = "#DB0000";
      $font_color = "#1DA03E";
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
            <div class="col-sm-6 col-md-3 col-lg-4 coatch-profile">
                <img src="../assets/Images/Flags/iran.png" width="100%" height="250px" alt="">
            </div>
            <div class="col-sm-6 col-md-9 col-lg-5">
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Team:</span> IR Iran</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Confederation:</span> AFC</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Current FIFA Rank:</span> 21</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Appearance in World Cup:</span> 6</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Top Scorer:</span> Ali Daei (109)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Most caps:</span> 	Javad Nekounam (151)</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Coatch:</span> Carlos Queiroz</h5>
                <h5 class="team-det"><span style="color: <?= $secondary_color?>">Captain:</span> Ehsan Hajsafi</h5>
            </div>
            <div class="col-sm-6 col-md-12 col-lg-3 logo-div">
                <img src="../assets/Images/Logos/Iran.png" height="250px" alt="">
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
                                        <td>1968, 1972, 1976</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: silver; font-weight: bolder;">Runners-up</td>
                                        <td>-</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #CD7F32; font-weight: bolder;">Third Place</td>
                                        <td>1980, 1988, 1996, 2004, 2019</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: #B0C4DE; font-weight: bolder;">Fourth place</td>
                                        <td>1984</td>
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
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Coatch</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Coatchs/iran.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Carlos Queiroz<span class="age float-end">Age: 69</span></h4>
                            <h6 class="player-info text-start">Nationality: Portugal</h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Goalkeepers</h4>
            <div class="owl-carousel owl-theme goalkeepers-owl">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/1.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alireza Beiranvand <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 1 <span class="float-end">Persepolis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/12.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Payam Niazmand <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 12 <span class="float-end">Sepahan</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/22.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Amir Abedzadeh <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 22 <span class="float-end">Ponferradina</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/24.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Hossein Hosseini <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 24 <span class="float-end">Esteghlal</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Defenders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/2.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Sadegh Moharrami<span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 2 <span class="float-end">Dinamo Zagreb</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/3.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ehsan Hajsafi <span>(C)</span><span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 3 <span class="float-end">AEK Athens</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/4.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Shojae Khalilzadeh <span class="age float-end">Age: 33</span></h4>
                            <h6 class="player-info text-start">No: 4 <span class="float-end">Al-Ahli Doha</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/5.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">	Milad Mohammadi <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 5 <span class="float-end">AEK Athens</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/8.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Morteza Pouraliganji <span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 8 <span class="float-end">Persepolis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/13.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">H. Kanaanizadegan<span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 13 <span class="float-end">Al-Ahli Doha</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/15.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Rouzbeh Cheshmi <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 15 <span class="float-end">Esteghlal</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/19.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Majid Hosseini <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 19 <span class="float-end">Kayserispor</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/23.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ramin Rezaeian <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 23 <span class="float-end">Sepahan</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/25.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Abolfazl Jalali <span class="age float-end">Age: 24</span></h4>
                            <h6 class="player-info text-start">No: 25 <span class="float-end">Esteghlal</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Midfielders</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/6.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Saeid Ezatolahi <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 6 <span class="float-end">Vejle</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/7.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Alireza Jahanbakhsh <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 7 <span class="float-end">Feyenoord</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/11.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Vahid Amiri<span class="age float-end">Age: 34</span></h4>
                            <h6 class="player-info text-start">No: 11 <span class="float-end">Persepolis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/14.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Saman Ghoddos <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 14 <span class="float-end">Brentford</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/16.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mehdi Torabi<span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 16 <span class="float-end">Persepolis</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/17.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ali Gholizadeh <span class="age float-end">Age: 26</span></h4>
                            <h6 class="player-info text-start">No: 17 <span class="float-end">Charleroi</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/18.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ali Karimi <span class="age float-end">Age: 28</span></h4>
                            <h6 class="player-info text-start">No: 18 <span class="float-end">Kayserispor</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/21.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Ahmad Nourollahi <span class="age float-end">Age: 29</span></h4>
                            <h6 class="player-info text-start">No: 21 <span class="float-end">Shabab Al-Ahli</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-start sub-titles" style="color: <?= $font_color?>">Forwards</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/9.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Mehdi Taremi<span class="age float-end">Age: 30</span></h4>
                            <h6 class="player-info text-start">No: 9 <span class="float-end">Porto</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/10.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Karim Ansarifard <span class="age float-end">Age: 32</span></h4>
                            <h6 class="player-info text-start">No: 10 <span class="float-end">Omonia</span></h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="../assets/Images/Teams/Iran/20.png" alt="">
                        <div class="card-footer" style="background: <?= $secondary_color?>; color:<?= $primary_color?>">
                            <h4 class="player-name text-start">Sardar Azmoun <span class="age float-end">Age: 27</span></h4>
                            <h6 class="player-info text-start">No: 20 <span class="float-end">Bayer Leverkusen</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    


<?php include '../includes/internal-footer.php'?>