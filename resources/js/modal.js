$(function (){
  let fx = {
    'initmodal' : function () {
      if ($('.modal-window').length === 0) {
        $('<div>').attr('id', 'overlay').prependTo('body');
        $('.container').addClass('blured');
        return $('<div>').addClass('modal-window').prependTo('body').css({
          "min-height" : "20vh"
        });
      } else {
        return $('.modal-window');
      }
    }
  }

  $('.more-details').click(function() {
    let id = $(this).attr('data-id');
    let modal = fx.initmodal();
    $('<a>').attr('href', '#').addClass('modal-close').html('&times;').click(function(){
      $('#overlay').remove();
      modal.remove();
      $('.container').removeClass('blured');
    }).appendTo(modal);

    $.ajax({
      type: 'POST',
      url: '/ajax',
      data: {
        "id": id,
      },
      success: function(data){
        modal.append(data);
      },
      error: e=>console.log(e),
    });
  });
});