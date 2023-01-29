<?php $title = "Al-Bayt Stadium";
include '../includes/inner-header.php'
?>

<section class="stadium-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 stad-img">
                <img src="../assets/Images/Stadiums/Al Bayt Stadium.jpg" alt="">
                <h4 class="stadium-question mt-4 mb-2">Location on map: </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6181.153836262596!2d51.49062914232137!3d25.652019590749486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45f98f7e19ee23%3A0xe7d7f8e9aafb0291!2z2KfYs9iq2KfYryDYp9mE2KjZitiq!5e0!3m2!1sar!2seg!4v1674122995630!5m2!1sar!2seg" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 stad-details">
                <h4 class="stadium-question">Stadium name: <span class="stadium-answer"> Al-Bayt</span></h4>
                <h4 class="stadium-question">City: <span class="stadium-answer"> Al Khor, Qatar</span></h4>
                <h4 class="stadium-question">Coordinates: <span class="stadium-answer"> 25°39′08″N 51°29′15″E</span></h4>
                <h4 class="stadium-question">Capacity: <span class="stadium-answer"> 68,895</span></h4>
                <h4 class="stadium-question">Date of opening: <span class="stadium-answer"> 30 November 2021</span></h4>
                <h4 class="stadium-question">About Stadium: </h4>
                <p class="stad-paragraph">
                    Al Bayt Stadium hosted the opening match of the 2022 World Cup, and hosted a semi-final and a quarter-final match. The stadium hosted around 60,000 World Cup fans, including 1,000 seats for press. The architectural design takes its inspiration from the traditional tents of the nomadic peoples of Qatar and the region. It features a retractable roof, providing covered seating for all spectators. It connects to transportation systems and have onsite parking for 6,000 cars, 350 buses and the coming and going of 150 public buses/shuttles, as well as 1,000 taxis and water taxis. The stadium is certified for its sustainability credentials under the Global Sustainability Assessment System (GSAS) for a number of certifications representing sustainable design & build, construction management practices and the efficiency of its energy centre. The stadium also received a five-star GSAS rating.
                    The stadium also includes luxurious hotel suites and rooms with balcony views of the football field.
                    To mark the National Sports Day, stadium's adjacent park's official opening was announced to be held on Qatar's sports day itself, 11 February 2020
                </p>
            </div>
            <div class="col-12">
                <h4 class="stadium-question mt-4 mb-2">Matches Hosted in <?= $title?></h4>
                <div class="table-responsive">
                    <table class="table table-bordered border-dark w-100 text-center">
                        <thead>
                            <td>Date</td>
                            <td>Home Team</td>
                            <td>Result</td>
                            <td>Away Team</td>
                            <td>Round</td>
                            <td>Attendance</td>
                        </thead>
                        <tr>
                            <td>20 November 2022</td>
                            <td class="text-end">Qatar <span class="team-flag-img"><img src="../assets/Images/Flags/qatar.png" alt=""></span></td>
                            <td>0 - 2</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/ecuador.png" alt=""></span> Ecuador</td>
                            <td>Group A</td>
                            <td>67,372</td>
                        </tr>
                        <tr>
                            <td>23 November 2022</td>
                            <td class="text-end">Morocco <span class="team-flag-img"><img src="../assets/Images/Flags/morocco.png" alt=""></span></td>
                            <td>0 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/Croatia.png" alt=""></span> Croatia</td>
                            <td>Group F</td>
                            <td>59,407</td>
                        </tr>
                        <tr>
                            <td>25 November 2022</td>
                            <td class="text-end">England <span class="team-flag-img"><img src="../assets/Images/Flags/england.png" alt=""></span></td>
                            <td>0 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/usa.png" alt=""></span> United States</td>
                            <td>Group B</td>
                            <td>68,463</td>
                        </tr>
                        <tr>
                            <td>27 November 2022</td>
                            <td class="text-end">Spain <span class="team-flag-img"><img src="../assets/Images/Flags/spain.png" alt=""></span></td>
                            <td>1 - 1</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/germany.png" alt=""></span> Germany</td>
                            <td>Group E</td>
                            <td>68,895</td>
                        </tr>
                        <tr>
                            <td>29 November 2022</td>
                            <td class="text-end">Netherlands <span class="team-flag-img"><img src="../assets/Images/Flags/netherlands.png" alt=""></span></td>
                            <td>2 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/qatar.png" alt=""></span> Qatar</td>
                            <td>Group A</td>
                            <td>66,784</td>
                        </tr>
                        <tr>
                            <td>1 December 2022</td>
                            <td class="text-end">Costa Rica <span class="team-flag-img"><img src="../assets/Images/Flags/costa rica.png" alt=""></span></td>
                            <td>2 - 4</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/germany.png" alt=""></span> Germany</td>
                            <td>Group E</td>
                            <td>67,054</td>
                        </tr>
                        <tr>
                            <td>4 December 2022</td>
                            <td class="text-end">England <span class="team-flag-img"><img src="../assets/Images/Flags/england.png" alt=""></span></td>
                            <td>3 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/Senegal.png" alt=""></span> Senegal</td>
                            <td>Round of 16</td>
                            <td>65,985</td>
                        </tr>
                        <tr>
                            <td>10 December 2022</td>
                            <td class="text-end">England <span class="team-flag-img"><img src="../assets/Images/Flags/england.png" alt=""></span></td>
                            <td>1 - 2</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/france.png" alt=""></span> France</td>
                            <td>Quarter-finals</td>
                            <td>68,895</td>
                        </tr>
                        <tr>
                            <td>14 December 2022</td>
                            <td class="text-end">France <span class="team-flag-img"><img src="../assets/Images/Flags/france.png" alt=""></span></td>
                            <td>2 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/morocco.png" alt=""></span> Morocco</td>
                            <td>Semi-finals</td>
                            <td>68,294</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include '../includes/internal-footer.php'
?>