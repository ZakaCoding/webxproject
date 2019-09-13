<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script>
  	 $(document).ready(function(){
	    $('.materialboxed').materialbox();
	    $('select').formSelect();
	    $('.tooltipped').tooltip();
      $('.datepicker').datepicker();

      $(window).scroll(function(){
          if($(window).scrollTop()>80){
            $('nav').addClass('teal lighten-2')
          }else{
            $('nav').removeClass('teal lighten-2');
          }
        });
	  });
  </script>
</body>
</html>
   