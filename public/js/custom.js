function updateCartItemCount() {
    $.ajax({
        url: "{{ route('cart.item_count') }}",
        type: "GET",
        success: function(response) {
            $("#cartItemCount").text(response); // Cập nhật số lượng hiển thị
        },
        error: function(xhr) {
            // Xử lý lỗi nếu có
        }
    });
}