<h2>All Products</h2> <h2><a href="{{url('/product/create')}}">Add New Product</a></h2>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name }} - {{ $product->price }} ৳</li>
    @endforeach
</ul>