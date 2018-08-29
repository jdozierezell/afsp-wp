<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package chapterLand
 */
?>



    </div><!-- .container -->
    <footer class="footer wide">
        <div class="container">
            <div class="footerLogo"> 
                <a href="#" class="footer-logo"><img src="https://chapterland.imgix.net/wp-content/uploads/sites/10/2017/09/StackedLogoWhite.png" alt="" /></a>
            </div>
            <div class="legal">
                <p>
                    Copyright © <?php echo date('Y'); ?> American Foundation for Suicide Prevention. All Rights Reserved.<br>
                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> 
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
    <script>
        var $buoop = {c:2}; 
        function $buo_f(){ 
            var e = document.createElement("script"); 
            e.src = "//browser-update.org/update.js"; 
            document.body.appendChild(e);
        };
        try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
        catch(e){window.attachEvent("onload", $buo_f)}    
        jQuery(document).ready(function($){
           $( '#menu' ).slicknav({
             label: "Touch for Menu",
             allowParentLinks: true
           });
        });
        (function() {

            var dataLogin = document.querySelector( '[data-dialog-login]' );
            var dialogLogin = document.getElementById( dataLogin.getAttribute( 'data-dialog-login' ) );
            var dlgLgn = new DialogFx( dialogLogin );

            dataLogin.addEventListener( 'click', dlgLgn.toggle.bind(dlgLgn) );
            
            var dataTry = document.querySelector( '[data-dialog-try]' );
            var dialogTry = document.getElementById( dataTry.getAttribute( 'data-dialog-try' ) );
            var dlgTry = new DialogFx( dialogTry );

            dataTry.addEventListener( 'click', dlgTry.toggle.bind(dlgTry) );
            
            var dataReset = document.querySelector( '[data-dialog-reset]' );
            var dialogReset = document.getElementById( dataReset.getAttribute( 'data-dialog-reset' ) );
            var dlgReset = new DialogFx( dialogReset );

            dataReset.addEventListener( 'click', dlgReset.toggle.bind(dlgReset) );
        })();

    // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-60994840-1', 'auto');
      ga('send', 'pageview');
    </script>

</body>
</html>
