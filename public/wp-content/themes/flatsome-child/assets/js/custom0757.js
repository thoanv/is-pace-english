jQuery(document).ready(function($) {
	$(document).ready(function() {
		$('.nav-menu').scrollLeft(30);
		var $menus = $('.nav-menu__item');
		$menus.each(function() {
			if ($(this).hasClass('active')) {
				$('.nav-menu').scrollLeft($(this).offset().left);
			}
		});
	});

	$('[name="sdt"]').attr('size','')
	document.addEventListener('DOMContentLoaded', function() {
    var guiform = document.querySelector('.wpcf7-form');
    guiform.addEventListener('submit', function(event) {
      var check_yourname = guiform.querySelector('input[name="check"]');

      if (check_yourname && check_yourname.value !== '') {
        event.preventDefault();
      }
    });
  });
	
  if ($(".posts-navigation .nav-previous").length) {
      $(".see-more").removeClass("d-none");
      $(".gini-archive_post").infiniteScroll({
          path: ".nav-previous a",
          append: ".gini_archive_template",
          status: ".page-load-status",
          hideNav: ".posts-navigation",
          scrollThreshold: false,
          button: ".view-more-button",
          history: false,
      });
  }
});

