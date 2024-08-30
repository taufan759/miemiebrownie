console.log("app-cart.js is loaded");

// Memperbarui kuantitas item di keranjang
$(document).on('change', '.item-quantity', function () {
    var itemId = $(this).data('id');
    var quantity = $(this).val();

    // Update cart secara otomatis jika quantity diubah
    $.ajax({
        url: '/cart/keranjang/update',
        type: 'POST',
        data: {
            items: items,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            if (response.cartTotal) {
                $('#cart-total').text('Rp ' + response.cartTotal);
            }
        },
        error: function (xhr) {
            console.log('Error:', xhr.responseText);
        }
    });
    
});


// Menghapus item dari keranjang
$(document).on('click', '.delete-item', function(e) {
    e.preventDefault();

    var productId = $(this).data('id');

    $.ajax({
        url: '/cart/keranjang/delete',
        method: 'POST',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            id: productId,
        },
        success: function(response) {
            if(response.cartTotal) {
                $('#cart-total').text('Rp ' + response.cartTotal);
                location.reload(); // Opsional: untuk refresh halaman setelah item dihapus
            }
        }
    });
});
