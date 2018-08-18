<!DOCTYPE html>


<html lang="en">


<head>
	
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://sdks.shopifycdn.com/js-buy-sdk/v0/latest/shopify-buy.umd.polyfilled.min.js"></script>

<script>
// initialise an api client
var shopClient = ShopifyBuy.buildClient({
    // you can generate the creds you need by following Shopify's Getting Started guide
    accessToken: '1260b902b142b380ea9d33007bf6125e',
    domain: 'acgsrescue.myshopify.com',
    appId: '1'
});
	
// create a cart - note that promises are widely used by the SDK
var objCart = null;

shopClient.createCart().then(function(cart) {
    // store a reference to the cart
    objCart = cart;
	console.log(objCart);
	$('#total').text(objCart);
	shopClient.fetchProduct('1414457589827').then(function(product){
		console.log(product);
	});
});


// pass your collection_id to pull all product information from Shopify
var arrProducts = null;
shopClient.fetchQueryProducts({
    collection_id: '72284405827'}).then(function(products) {
    // store a copy of the data received
    arrProducts = products;
console.log(arrProducts);
    // loop through and display each product on the page so the user can make their selection
    arrProducts.each(function(i, e) {
        // ...
        // the detail of this is up to you, but for this example i'm going to assume each 
        // product row  has data attributes containing the product and variant IDs
        // and contains a quantity box e.g. <input type="number" name="quantity" value="0">
        // ...
    });
});
	</script>	
	
</head>
<body>
	<div id="total">
		
	</div>
	
	</body>	
	
</html>