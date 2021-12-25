<div class="container">
    {!! Form::open(['route' => 'sales.store']) !!}
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Product name</label>
            <select class="custom-select form-control" required id="product_id" name="product_id">
                <option value="">Select Product</option>
                @foreach($products as $key => $name )
                    <option value="{{ $key }}" {{ old('product_id') == $key ? 'selected': ''}}>{{ $name }}</option>
                @endforeach
            </select>
            @error('product_id')
            <p class="text-danger">{{ $message }} </p>
            @enderror</div>
        <div class="form-group">
            <label for="exampleInputPassword1">Sales Quantity</label>
            <input required type="text" name="sales_quantity" value="{{ old('sales_quantity') }}" class="form-control" id="exampleInputPassword1" placeholder="Quantity">

            @error('sales_quantity')
            <p class="text-danger">{{ $message }} </p>
            @enderror</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {!! Form::close() !!}
</div>
