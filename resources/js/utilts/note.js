window.$ = require('jquery');

$(document).ready(function () {
    const noteBlock = $('footer #note');
    const noteCloseBtn = $('footer #note_close');
    const noteContent = $('footer #note_content');

    $(noteCloseBtn).on('click', function (e) {
        e.preventDefault();
        $(noteBlock).removeClass('active');
    });

    // Livewire.on('addedToCart', (id, image_url, title) => {
    //     $(noteBlock).addClass('active');
    //     $(noteContent).text(`Товар - ${title} - был добавлен в корзину. Количество в корзине - 1`);
    // })
    // Livewire.on('productQuantityIncreased', (title, quantity) => {
    //     $(noteBlock).addClass('active');
    // })

    // Livewire.on('alreadyInCart', (id, image_url, title) => {
    //     $(noteBlock).removeClass('warning');
    //     $(noteBlock).addClass('active danger');
    //     $(noteContent).text(`Товар - ${title} - уже в корзине`);
    // })
});
