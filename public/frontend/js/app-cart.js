$(document).ready(function() {
    console.log("app-cart.js is loaded");

    // Fungsi untuk memperbarui kuantitas item di keranjang saat tombol "Update Cart" diklik
    $(document).on('click', '#update-cart', function(e) {
        e.preventDefault(); // Mencegah aksi default dari link

        var items = [];

        // Mengumpulkan semua item dan kuantitasnya
        $('.item-quantity').each(function() {
            var itemId = $(this).data('id');
            var quantity = $(this).val();
            if (quantity > 0) { // Pastikan kuantitas lebih besar dari 0
                items.push({ id: itemId, quantity: quantity });
            }
        });

        // Update cart melalui AJAX POST request
        $.ajax({
            url: '/cart/keranjang/update',
            type: 'POST',
            data: {
                items: items,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.cartTotal) {
                    $('#cart-total').text('Rp ' + response.cartTotal);
                }
                if (response.updatedItems) {
                    updateCartDisplay(response.updatedItems);
                }
            },
            
            error: function(xhr) {
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
                if (response.cartTotal) {
                    $('#cart-total').text('Rp ' + response.cartTotal);
                    // Hapus item dari tampilan
                    $(e.target).closest('tr').remove(); // Sesuaikan selector dengan struktur HTML Anda
                }
            },
            error: function(xhr, status, error) {
                console.log("Terjadi kesalahan:", error);
            }
        });
    });
});
function updateCartDisplay(updatedItems) {
    updatedItems.forEach(function(item) {
        // Temukan baris untuk item
        var $row = $('tr').find('[data-id="' + item.id + '"]').closest('tr');

        // Perbarui sel harga total
        $row.find('.cart__price').text('Rp ' + item.totalPrice);
        
        // Perbarui sel kuantitas
        $row.find('.item-quantity').val(item.quantity);
    });
}
