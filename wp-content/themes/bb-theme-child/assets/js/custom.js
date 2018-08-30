jQuery( document ).ready( function ( $ ) {
  $(window).scroll(function() {
    if ($(this).scrollTop()>0)
    {
      $('.fl-page-header-primary .fl-page-header-wrap').fadeOut('fast');
    }
    else
    {
      $('.fl-page-header-primary .fl-page-header-wrap').fadeIn('fast');
    }
  })
});
