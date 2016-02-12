(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
  wp.customize( 'blogdescription', function( value ) {
	value.bind( function( to ) {
		$( '.site-description' ).text( to );
		});
	});
})(jQuery);
