<img class="logo" src="Theme/Images/logo.png" alt="Smit Winkel Logo"/>
<div class="header-container-text shadow-text">Smit &amp; Winkel | <?php
                                    echo commonlang('MainHeader')
                                    ?></div>
<div class="header-container-addText">
   Tel: 021 919 5559<br>2 Mountainview Drive<br>Bellville
</div>
<div class="translate-container clearfix">
     <?php if($currLang == "en"){ ?>
             <form method="POST" action="">   
                <input type="hidden" name="langtoggle" value="af" />
                <input  class="btn-translation" type="submit"  value="Afrikaans" />
            </form>
        <?php } if($currLang == "af") { ?>
         <div >
             <form method="POST" action="">   
                 <input type="hidden" name="langtoggle" value="en" />
                <input  class="btn-translation" type="submit" value="English"   />
            </form>
        </div>
        
        <?php }  ?>
  <!--<a  class="btn-translation" href="/af">Afrikaans</a> -->
</div>
