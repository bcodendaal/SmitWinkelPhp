<div id="nav">
    <nav class="nav-container">
        <div class="btn-translation-sm">
            <?php if($currLang == "en"){ ?>
             <form method="POST" action="">   
                <input class="btn-translation-formbtn" type="hidden" name="langtoggle" value="af" />
                <input class="btn-translation-formbtn" type="submit"  value="Afrikaans" />
            </form>
        <?php } if($currLang == "af") { ?>
         <div >
             <form method="POST" action="">   
                <input class="btn-translation-formbtn" type="hidden" name="langtoggle" value="en" />
                <input class="btn-translation-formbtn" type="submit" value="English"   />
            </form>
        </div>
        
        <?php }  ?>
        </div>
        <span class="nav-btn ">
        </span>
        <ul class="nav">
            <li><a href="index.php"><?php
                                    echo commonlang('Home')
                                    ?></a></li>
            <li><a href="ourteam.php"><?php
                                    echo commonlang('OurTeam')
                                    ?></a></li>
            <li><a href="services.php"><?php
                                    echo commonlang('DentalServices')
                                    ?></a></li>
            <li><a href="newpatient.php"><?php
                                    echo commonlang('NewPatient')
                                    ?></a></li>
            <li><a href="appointment.php"><?php
                                    echo commonlang('MakeAppointment')
                                    ?></a></li>
            <li><a href="contactus.php"><?php
                                    echo commonlang('ContactUs')
                                    ?></a></li>
        </ul>
    </nav>
</div>