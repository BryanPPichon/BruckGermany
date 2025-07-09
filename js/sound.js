//function reproducirSonido() {
//  $("#myVideo").removeAttr( "muted" );
//  var video = document.getElementById("myVideo");
//  video.play();
//}



$('.audio-control').click(function(){
    if( $("#myVideo").prop('muted') ) {
          $("#myVideo").prop('muted', false);
          $(this).text('SILENCIAR');
      // or toggle class, style it with a volume icon sprite, change background-position
    } else {
      $("#myVideo").prop('muted', true);
      $(this).text('SONIDO');
    }
});