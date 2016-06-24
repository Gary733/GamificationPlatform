<?php
session_start();
include "config.php";

if (!isset($_SESSION['username'])) {
   echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
} else {


echo '<div class="col-md-9">
                                    <div class="well">
                                        <h4>Dashboard</h4>
                                        <p>Noten im Überblick</p>
										
                                    </div>
                                    <div class="well">
                                        <h4>CreditPoints</h4>
                                        <p>CP\'s im Überblick</p>                        
                                    </div>                   
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 1</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 2</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 3</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 4</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 5</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 6</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-lg-4">
                                            <div class="well">
                                                <h4>Semester 7</h4>
                                                <p>Notendurchschnitt x.yz</p> 
                                            </div>
                                        </div>
                                    </div>
								</div>';




}
?>