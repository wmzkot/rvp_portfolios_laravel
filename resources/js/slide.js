$(function (){
  $('.slides .thumbs img').on('hover click', e => {
    $('#slide_img').attr('src', $(e.target).attr('src'));
  });

  

});