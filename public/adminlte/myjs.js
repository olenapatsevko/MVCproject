$('.delete').click(function () {
    var res = confirm("\n" +
        "Вы действительно хотите удалить заказ?");
    if (!res) return false;
    location.reload();
});

$('.sidebar-menu a').each(function () {

    var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if (link == location2) {
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active');
    }

});

