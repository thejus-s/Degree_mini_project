   
<br><br><br><br><br>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright © PLAYHUB 2023. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="static/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="static/assets/js/popper.js"></script>
    <script src="static/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="static/assets/js/owl-carousel.js"></script>
    <script src="static/assets/js/scrollreveal.min.js"></script>
    <script src="static/assets/js/waypoints.min.js"></script>
    <script src="static/assets/js/jquery.counterup.min.js"></script>
    <script src="static/assets/js/imgfix.min.js"></script> 
    <script src="static/assets/js/slick.js"></script> 
    <script src="static/assets/js/lightbox.js"></script> 
    <script src="static/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="static/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>



