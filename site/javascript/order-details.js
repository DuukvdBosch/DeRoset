// Get the modal and the button that opens it
var modal = document.querySelector('.modal');
var button = document.querySelector('button');

// When the button is clicked, show the modal and populate the fields with the order data
button.addEventListener('click', function() {
	// Use JavaScript to fetch the data for the order from your database or API
	// Replace the placeholders below with the actual data for the order
	var orderId = '1234';
	var customerName = 'John Smith';
	var orderDate = '2023-03-28';
	var shippingAddress = '123 Main St, Anytown USA';
	var billingAddress = '123 Main St, Anytown USA';
	var items = 'Item 1, Item 2, Item 3';
	var totalAmount = '$100.00';
	
	// Populate the fields with the order data
	document.getElementById('order-id').textContent = orderId;
	document.getElementById('customer-name').textContent = customerName;
	document.getElementById('order-date').textContent = orderDate;
	document.getElementById('shipping-address').textContent = shippingAddress;
	document.getElementById('billing-address').textContent = billingAddress;
	document.getElementById('items').textContent = items;
	document.getElementById('total-amount').textContent = totalAmount;
	
	// Show the modal
	modal.style.display = 'block';
});

// When the user clicks the "Close" button, hide the modal
var closeButton = document.querySelector('.close');
closeButton.addEventListener('click', function() {
	modal.style.display = 'none';
});

// When the user clicks anywhere outside of the modal, hide it
window.addEventListener('click', function(event) {
	if (event.target == modal) {
		modal.style.display = 'none';
	}
});
