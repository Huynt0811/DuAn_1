var cartButtons = $('.cart-plus-minus').find('button');
$(cartButtons).on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var target = $this.parent().data('target');
    var target = $('#' + target);
    var current = parseFloat($(target).val());
    var total = parseFloat($('#total').val())
    if ($this.hasClass('cart-plus-1')) {
        target.val(current + 1);
        $('#total').val(total + 1);
    } else {
        if (current >= 2) {
            target.val(current - 1);
            $('#total').val(total - 1);
        }
    }
});