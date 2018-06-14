var SubmitMyForm = function (e) {
    e.preventDefault();
    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var street = $('#street').val();
    var home = $('#home').val();
    var part = $('#part').val();
    var appt = $('#appt').val();
    var floor = $('#floor').val();
    var comment = $('#comment').val();
    $.ajax({
        url : 'vp.php',
        type : 'post',
        data : 'name='+name +'&'+ 'phone='+phone +'email='+email+'part='+part +'street='+street +'home='+home +'appt='+appt +'floor='+floor+'comment='+comment,
        success : function (response) {
            alert("Пользователь добавился");
        }
    })
};



$(document).ready(function () {
    $('#order-form').bind('#submit', SubmitMyForm)
    // $('#submit').on('click', function () {
    //     var name = $('#name').value;
    //     console.log(name);
    // });
});
