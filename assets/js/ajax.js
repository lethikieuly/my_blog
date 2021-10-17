function loadInfoCategory(element) {
    $.ajax({
        url: 'listbycategory.php?id=' + element.value,
        data: null,
        type: 'get',
        success: function (output) {
            $('#content__project').html(output);
        }
    })
}