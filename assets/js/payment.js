$(function() {
    $('[data-toggle="tooltip"]').tooltip()
    })

function errorPayment(){
    swal("Error occured !");
}
function validPayment(){
    swal({
        title: 'Congratulations!',
        text: 'You entered the correct answer',
        type: 'success',
        button: {
          text: "Continue",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      })
}