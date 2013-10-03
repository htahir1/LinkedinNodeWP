jQuery.ajaxSetup({
  beforeSend: function() {
     $('#loader').show();
     $('#pagecontent').hide();
  },
  complete: function(){
     $('#loader').fadeOut('fast');
     $('#pagecontent').fadeIn('slow');
  },
  success: function() {}
});
    $(function(){
        $("a").click(function (e) { 
            e.preventDefault();
            $("#loadsite").load($(this).attr("href"));
        });
    });
