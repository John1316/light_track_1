(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
  $(".progress-bar").loading();


  $('#list-bachelor-users-table').DataTable({
    
  });
  $(".main-menu .nav-link ,.main-menu .nav-item .nav-link ").on("click", function(){
    $(".main-menu .nav-link i").css("")
  })
  $(document).ready(function () {
    $("#loader").delay(2000).fadeOut(4000)
  });

})(window);