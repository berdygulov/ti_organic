window.$ = require('jquery');

$(document).ready(function () {
    const noteBlock = $('footer .note');
    const noteCloseBtn = $('footer .note-close');
    const noteContent = $('footer .note-content');

    $(noteCloseBtn).on('click', function (e) {
        e.preventDefault();
        $(noteBlock).removeClass('active');
    });

    // Livewire.on('productAdded', title => {
    //     $(noteBlock).addClass('active');
    //     $(noteContent).text(`Товар - ${title} - был добавлен в корзину`);
    // })
});
