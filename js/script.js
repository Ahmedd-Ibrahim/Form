/* global $, console ,alert */
$(function (){
  'use strict';
  var userError = true ,

      emailError = true,

      phoneError = true;

  $('.username').blur(function () {

    if ($(this).val().length <= 3 ){

      $(this).css('border', '1px solid #f00')

      $('.custom-alert').fadeIn(200);
      userError = true;
    }
    else {
      $('.custom-alert').fadeOut(200);

      $(this).css('border', '1px solid green')
      userError = false;    }
  
  });


  $('.email').blur(function(){

    if ($('.email').val().length <= 3 ){

      $(this).css('border', '1px solid #f00')

      $('.custom-alert-email').fadeIn(200);
       emailError = true;
    }

    else {

      $('.custom-alert-email').fadeOut(200);

      $(this).css('border', '1px solid green')
       emailError = false;    
    }
  });

  $('.phone').blur(function(){

    if ($('.phone').val().length <= 3 ){

      $(this).css('border', '1px solid #f00')

      $('.custom-alert-phone').fadeIn(200);
      phoneError = true;
    }

    else {

      $('.custom-alert-phone').fadeOut(200);

      $(this).css('border', '1px solid green')
       phoneError = false;    
    }

  });

  $('.my-form').submit(function(e){

if (userError === true ||  phoneError === true || emailError === true ){
      e.preventDefault();

      $('.username, .phone , .email').blur();
  }
  });


   



  
});
