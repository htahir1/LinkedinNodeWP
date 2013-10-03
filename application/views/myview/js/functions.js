  $(document).ready(
    function(){

$('.studentcircle').click(function(){
      $('.studentloginbox').fadeToggle('200', 'linear');
      $('.facultyloginbox').hide(0);
      $('.adminloginbox').hide(0);
  });
  
$('.facultycircle').click(function(){
      $('.facultyloginbox').fadeToggle('200', 'linear');
      $('.studentloginbox').hide(0);
      $('.adminloginbox').hide(0);
  });

$('.admincircle').click(function(){
      $('.adminloginbox').fadeToggle('200', 'linear');
      $('.studentloginbox').hide(0);
      $('.facultyloginbox').hide(0);
  });
  
    });