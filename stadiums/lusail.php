<?php $title = "Lusail Stadium";
include '../includes/inner-header.php'
?>

<section class="stadium-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 stad-img">
                <img src="../assets/Images/Stadiums/Lusail Stadium.jpg" alt="">
                <h4 class="stadium-question mt-4 mb-2">Location on map: </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.376280797705!2d51.49290659509045!3d25.421305009320747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45e79240aff901%3A0x78b22e86c6d52895!2z2KfYs9iq2KfYryDZhNmI2LPZitmE!5e0!3m2!1sar!2seg!4v1674139109862!5m2!1sar!2seg" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 stad-details">
                <h4 class="stadium-question">Stadium name: <span class="stadium-answer"> Lusail</span></h4>
                <h4 class="stadium-question">City: <span class="stadium-answer"> Lusail, Qatar</span></h4>
                <h4 class="stadium-question">Coordinates: <span class="stadium-answer"> 25°25′15.1″N 51°29′25.4″E</span></h4>
                <h4 class="stadium-question">Capacity: <span class="stadium-answer"> 88,966</span></h4>
                <h4 class="stadium-question">Date of opening: <span class="stadium-answer"> 21 November 2021</span></h4>
                <h4 class="stadium-question">About Stadium: </h4>
                <p class="stad-paragraph">
                Lusail Iconic Stadium, is a football stadium in Lusail, Qatar. Owned by the Qatar Football Association, it is the largest stadium in Qatar and the Middle East by capacity and one of eight stadiums built for the 2022 FIFA World Cup, during which it hosted the final game between Argentina and France on 18 December 2022. It is currently the fourth largest stadium in Asia but eventually will reduce its current capacity of 88,966 to 40,000 in the near future.
                The stadium is located about 20 kilometres (12 mi) north of Doha. Lusail Stadium was inaugurated on 9 September 2022 with the Lusail Super Cup game.
                On 9 September 2022, the Lusail Stadium hosted the Saudi-Egyptian Super Cup, a tournament that served as a rehearsal for the World Cup finals, held between the two teams of Al Hilal, the 2021–22 Saudi Arabian champion, and Zamalek, the 2021–22 Egyptian champion, in front of 77,575 fans. The two sides played out 1–1 draw, with Al Hilal triumphing 4–1 after a penalty shootout.
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
                            <td>22 November 2022</td>
                            <td class="text-end">Argentina <span class="team-flag-img"><img src="../assets/Images/Flags/argentina.png" alt=""></span></td>
                            <td>1 - 2</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/ksa.png" alt=""></span> Saudi Arabia</td>
                            <td>Group C</td>
                            <td>88,012</td>
                        </tr>
                        <tr>
                            <td>24 November 2022</td>
                            <td class="text-end">Brazil <span class="team-flag-img"><img src="../assets/Images/Flags/brazil.png" alt=""></span></td>
                            <td>2 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/Serbia.png" alt=""></span> Serbia</td>
                            <td>Group G</td>
                            <td>88,103</td>
                        </tr>
                        <tr>
                            <td>26 November 2022</td>
                            <td class="text-end">Argentina <span class="team-flag-img"><img src="../assets/Images/Flags/argentina.png" alt=""></span></td>
                            <td>2 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/mexico.png" alt=""></span> Mexico</td>
                            <td>Group C</td>
                            <td>88,966</td>
                        </tr>
                        <tr>
                            <td>28 November 2022</td>
                            <td class="text-end">Portugal <span class="team-flag-img"><img src="../assets/Images/Flags/portugal.png" alt=""></span></td>
                            <td>2 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/uruguay.png" alt=""></span> Uruguay</td>
                            <td>Group H</td>
                            <td>88,668</td>
                        </tr>
                        <tr>
                            <td>30 November 2022</td>
                            <td class="text-end">Saudi Arabia <span class="team-flag-img"><img src="../assets/Images/Flags/ksa.png" alt=""></span></td>
                            <td>1 - 2</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/mexico.png" alt=""></span> Mexico</td>
                            <td>Group C</td>
                            <td>84,985</td>
                        </tr>
                        <tr>
                            <td>2 December 2022</td>
                            <td class="text-end">Cameroon <span class="team-flag-img"><img src="../assets/Images/Flags/cameroon.png" alt=""></span></td>
                            <td>1 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/brazil.png" alt=""></span> Brazil</td>
                            <td>Group G</td>
                            <td>85,986</td>
                        </tr>
                        <tr>
                            <td>6 December 2022</td>
                            <td class="text-end">Portugal <span class="team-flag-img"><img src="../assets/Images/Flags/portugal.png" alt=""></span></td>
                            <td>6 - 1</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/switzerland.png" alt=""></span> Switzerland</td>
                            <td>Round of 16</td>
                            <td>83,268</td>
                        </tr>
                        <tr>
                            <td>9 December 2022</td>
                            <td class="text-end">Netherlands <span class="team-flag-img"><img src="../assets/Images/Flags/netherlands.png" alt=""></span></td>
                            <td>2 - 2 <br> (3 - 4)p</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/argentina.png" alt=""></span> Argentina</td>
                            <td>Quarter-finals</td>
                            <td>83,268</td>
                        </tr>
                        <tr>
                            <td>13 December 2022</td>
                            <td class="text-end">Argentina <span class="team-flag-img"><img src="../assets/Images/Flags/argentina.png" alt=""></span></td>
                            <td>3 - 0</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/Croatia.png" alt=""></span> Croatia</td>
                            <td>Semi-finals</td>
                            <td>88,966</td>
                        </tr>
                        <tr>
                            <td>18 December 2022</td>
                            <td class="text-end">Argentina <span class="team-flag-img"><img src="../assets/Images/Flags/argentina.png" alt=""></span></td>
                            <td>3 - 3 <br> (4 - 2)p</td>
                            <td class="text-start"><span class="team-flag-img"><img src="../assets/Images/Flags/france.png" alt=""></span> France</td>
                            <td>Final</td>
                            <td>88,966</td>
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