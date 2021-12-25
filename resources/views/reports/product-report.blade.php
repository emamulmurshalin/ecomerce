<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Buy Price</th>
            <th scope="col">Selling Price</th>
            <th scope="col">Available Quantity</th>
            <th scope="col">Total Sales Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productsReport as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->buy_price }}</td>
            <td>{{ $product->selling_price }}</td>
            <td>{{ $product->available_quantity }}</td>
            <td>{{ $product->sales_sum_sales_quantity }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
