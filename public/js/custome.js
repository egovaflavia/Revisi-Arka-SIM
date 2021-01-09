$(document).ready(function () {
    $('select').formSelect();
    $('.sidenav').sidenav();
    $('.slider').slider();
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '5491133359850',
            popupMessage: 'Hai, ada yang bisa kami bantu?',
            showPopup: true
        });
    });
});
