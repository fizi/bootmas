


$(function () {

  // Scroll To top   
  $('.movetotop').click(function() {
    $('html, body').animate({scrollTop: 0}, 700);
    return false;
  });    
  
  
  // Forum Stats make responsive *************************************************
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
  
  
  // ------------------------------------------------------- //
  // Multi Level dropdowns for main menu
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  }); 
  
  
  //------------ Remove the buttongroup from view news item -----------------------------------//
  $('#view-item .view-item-share a').removeClass('btn btn-default btn-secondary'); 
  $('#view-item').find('div.social-share').contents().unwrap();
  $('#view-item .view-item-share a').addClass('float-start m-2 d-flex justify-content-center align-items-center text-white');
  
  //------------ Remove the buttongroup from cpage view -----------------------------------//
  $('#cpage-view .cpage-view-share a').removeClass('btn btn-default btn-secondary'); 
  $('#cpage-view').find('div.social-share').contents().unwrap();
  $('#cpage-view .cpage-view-share a').addClass('float-start m-2 d-flex justify-content-center align-items-center text-white');
    

    
});