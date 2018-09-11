$(document).on('ready', function () {
  registerMessages();
  $.ajaxSetup({'cache': false});
  setInterval('loadOldMessages()', 500);

});

 function registerMessages () {
  $('#send').on('click', function (e) {
    e.preventDefault();
    var frm = $('#formChat').serialize();
    console.log(frm);
    $.ajax({
      type: 'POST',
      url: 'register.php',
      data: frm
    }).done( function (info) {
      $('#message').val('');
      var altura = $('#conversation').prop('scrollHeight');
      $('#conversation').scrollTop(altura);
      console.log(info);
    });
  });
};

function loadOldMessages () {
  $.ajax({
    type: 'POST',
    url: 'conversation.php'
  }).done(function (info) {
    $('#conversation').html(info);
    var altura = $('#conversation').prop('scrollHeight');
    $('#conversation').scrollTop(altura);
  });
}
