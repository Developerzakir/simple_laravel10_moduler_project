<h2><a href="">Add New Product</a></h2>
<form method="POST" action="/product/store">
    @csrf
    <input type="text" name="name" placeholder="Product Name">
    <input type="text" name="price" placeholder="Price">
    <button type="submit">Save</button>
</form>