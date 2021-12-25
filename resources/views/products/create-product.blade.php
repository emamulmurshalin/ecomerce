<div class="container">
    {!! Form::open(['route' => 'product.store']) !!}
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Product name</label>
            <input required type="text" name="name" value="{{ old('name') }}" class="form-control" aria-describedby="emailHelp" placeholder="Product">

            @error('name')
            <p class="text-danger">{{ $message }} </p>
            @enderror</div>
        <div class="form-group">
            <label for="exampleInputPassword1">Buy Price</label>
            <input required type="text" name="buy_price" value="{{ old('buy_price') }}" class="form-control" id="exampleInputPassword1" placeholder="Buy Price">

            @error('buy_price')
            <p class="text-danger">{{ $message }} </p>
            @enderror</div>
        <div class="form-group">
            <label for="exampleInputPassword1">Selling Price</label>
            <input required type="text" name="selling_price" value="{{ old('selling_price') }}" class="form-control" id="exampleInputPassword1" placeholder="Selling Price">

            @error('selling_price')
            <p class="text-danger">{{ $message }} </p>
            @enderror</div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quantity</label>
            <input required type="text" name="available_quantity" value="{{ old('available_quantity') }}" class="form-control" id="exampleInputPassword1" placeholder="Quantity">

            @error('available_quantity')
            <p class="text-danger">{{ $message }} </p>
            @enderror</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {!! Form::close() !!}
</div>
