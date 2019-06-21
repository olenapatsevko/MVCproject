





/* Search */
var products = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: path + '/search/typeahead?query=%QUERY'
    }
});

products.initialize();

$("#typeahead").typeahead({
    // hint: false,
    highlight: true
},{
    name: 'products',
    display: 'title',
    limit: 6,
    source: products
});

$('#typeahead').bind('typeahead:select', function(ev, suggestion) {
    // console.log(suggestion);
    window.location = path + '/search/?s=' + encodeURIComponent(suggestion.title);
});

/*Cart*/
$('body').on('click', '.add-to-cart-link', function(e){
    e.preventDefault();


    var id = $(this).data('id'),
        qty = $('.quantity input').val() ? $('.quantity input').val() : 1,
        mod = $('.available select').val();

    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty, mod: mod},
        type: 'GET',
        success: function(res){

            showCart(res);

        },
        error: function(){
            alert('Ошибка! Попробуйте позже');
        }
    });
});





/* Cart */
$('body').on('click', '.cart-plus', function (e) {
e.preventDefault();

  //   var qty_input = Number($('.quantity input').val()? $('.quantity input').val() : 1);
  //   var cart_num = Number($('.cart-num span').text() ? Number($('.cart-num span').text())+ Number(qty_input) : Number($('.cart-num span').text()) );
  //   // ЗРОБИТ НОРМЛЬНИЙ ВИВІД КОЗИНИ А НЕ ЦЯ ТИКА ФІГНЯ ЯКА НЕ ПАРСИТЬСЯ
  //
  // const desktopcart =  document.getElementById('cart-num-desktop') ;
  // const mobilecart = document.getElementById('cart-num') ;
  //       desktopcart.innerHTML = cart_num.toString();
  //       mobilecart.innerHTML = cart_num.toString();

   //$('.cart-num').text();


var id  = $(this).data('id'),
 qty = $('.quantity input').val()? $('.quantity input').val() : 1,
 mod = geList();
    // myStorage = window.localStorage;
    // if (myStorage){
    //     var a = myStorage.getItem('qty');
    //     console.log(a);
    //     myStorage.setItem('qty', Number(qty)+Number(a));
    // } else {
    //     myStorage.setItem('qty', qty);
    // }

$.ajax({
    url: '/cart/add',
    data: {id:id , qty: qty, mod:mod},
    type: 'GET',
    success: function (res) {
        // $('#cart-num').html( myStorage.getItem('qty'));
        showCart(res);
    },
    error: function () {
        alert('Error try again later');

    }
});

});

$('body').on('click', '.item-which-i-want-to-delete',function () {
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/delete',
            data: {id:id},
            type: 'GET',
            success: function (res) {
                showCart(res);
            },
            error: function () {
                alert('Error');

            }
        })

});

$('.num-controls').on('click', '.babaminus',function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/decrement',
        data: {id:id},
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function () {
            alert('Error');

        }
    })

});

$('.num-controls').on('click', '.babaplus',function () {
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/increment',
        data: {id:id},
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function () {
            alert('Error');

        }
    })

});





// $('#cart .modal-body').on('click', '.del-item', function(){
//     var id = $(this).data('id');
//     $.ajax({
//         url: '/cart/delete',
//         data: {id: id},
//         type: 'GET',
//         success: function(res){
//             showCart(res);
//         },
//         error: function(){
//             alert('Error!');
//         }
//     });
// });


const geList = () => {
    const checkedList = [];
    const blockEl = document.getElementById('boxid');
    let inputs = blockEl.getElementsByTagName('input');
    inputs = [...inputs].filter(input => input.type.toLowerCase() === 'radio');
    inputs.forEach(input => {
        const { name, value, id, checked } = input;
        if(checked) {
            checkedList.push(id);

        }
    });
    return checkedList;
};

function showCart(cart){

    location.reload();
    // if(cart == '<h3>Корзина пуста</h3>'){
    //     $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'none');
    // }else{
    //     $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('display', 'inline-block');
    // }
    // $('#cart .modal-body').html(cart);
    // $('#cart').modal('show');
    // if($('.cart-sum').text()){
    //     $('.simpleCart_total').html($('#cart .cart-sum').text());
    // }else{
    //     $('.simpleCart_total').text('Empty Cart');
    // }

}


// $( document ).ready(function() {
//     $("#btn").click(
//         function(){
//             sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
//             return false;
//         }
//     );
// });
//
// function sendAjaxForm(result_form, ajax_form, url) {
//     $.ajax({
//         url:     url, //url страницы (action_ajax_form.php)
//         type:     "POST", //метод отправки
//         dataType: "html", //формат данных
//         data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
//         success: function(response) { //Данные отправлены успешно
//             result = $.parseJSON(response);
//             $('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
//         },
//         error: function(response) { // Данные не отправлены
//             $('#result_form').html('Ошибка. Данные не отправлены.');
//         }
//     });
// }









