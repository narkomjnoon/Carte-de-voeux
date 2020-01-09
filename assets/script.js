/////////////////////////////////////// NEIGE
$(document).ready(function() {

    var $clickMe = $('.click-icon'),
        $card = $('.card');
    
    $card.on('click', function() {
  
          $(this).toggleClass('is-opened');
      $clickMe.toggleClass('is-hidden');
  
      });
  
  });

/////////////////////////////////////// LOADER
  TweenMax.set('svg', {
    visibility:'visible'
  })
  
  var tl = new TimelineMax({repeat:-1});
  tl.to('#gradPattern', 5, {
    attr:{
      x:400
    },
    ease:Linear.easeNone
  })

  jQuery(window).on("load",function(){ jQuery(".mainSVG").fadeOut("200"); });
  

/////////////////////////////////////// ENVOI MAIL

$(function (){
  $('#formulaire').submit(function (e){
    e.preventDefault();
    $('.error').empty();
    let postdata = $('#formulaire').serialize();
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: postdata,
      dataType: 'json',
      success: function(result){
        if(result.isSuccess){
          $("#formulaire").append("<p class='validation'>Votre mail m'a bien été transmis !</p>");
          $("#formulaire")[0].reset();
        }
        else{
          $("#nom + .error").html(result.nomerror);
          $("#email + .error").html(result.emailerror);
        }
      }
    });
  });
})


var gui=document.getElementById("gui");
var form=document.getElementById("formulaire");
var croix=document.getElementById("croix");

gui.addEventListener('click', function(e) {
  e.preventDefault();
  form.classList.remove("opacity2");
  form.classList.toggle("opacity");
})

croix.addEventListener('click',function(e){
  e.preventDefault();
  form.classList.toggle("opacity2");
  form.classList.remove("opacity");
}
)