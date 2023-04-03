
function addToCart(id) {
	$.ajax({
		url: 'cart.php?_=' + new Date().getTime(),
		type: 'POST',
		data: { id: id },
		success: function (response) {
			alert('Item added to cart!');
			updateCartCount(response);
		},
		error: function (xhr, status, error) {
			console.log(xhr.responseText);
		}
	});
}

function updateCart(id, quantity) {
	$.ajax({
		url: 'cart.php',
		type: 'POST',
		data: { id: id, quantity: quantity },
		success: function (response) {
			updateCartCount(response);
		},
		error: function (xhr, status, error) {
			console.log(xhr.responseText);
		}
	});
}

function removeFromCart(id) {
	$.ajax({
		url: 'cart.php',
		type: 'POST',
		data: { id: id, remove: true },
		success: function (response) {
			updateCartCount(response);
		},
		error: function (xhr, status, error) {
			console.log(xhr.responseText);
		}
	});
}

function updateCartCount(count) {
	$('#cart-count').text(count);
}
