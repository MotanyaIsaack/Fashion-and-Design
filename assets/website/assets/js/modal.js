function callmodal() {
  $('.modal').modal({
    preventScrolling: true
  });
}

function dismissModal() {
  $('.modal').modal('hide');
  $("#email-feedback").addClass('hide')
}

$(document).ready(function () {
  $('.fixed-action-btn').floatingActionButton();
});


