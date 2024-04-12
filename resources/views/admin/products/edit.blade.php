@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{route('admin.products.update', $product->id)}}" method="post">
                    {{ csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="exampleInputName1">image</label>
                        <input name="image" value="{{$product->image}}" type="text" class="form-control" id="exampleInputName1" placeholder="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Name</label>
                        <input name="name" value="{{$product->name}}" type="text" class="form-control" id="exampleInputEmail3" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">description</label>
                        <input name="description" value="{{$product->description}}" type="text" class="form-control" id="exampleInputPassword4" placeholder="description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">price</label>
                        <input name="price" value="{{$product->price}}" type="text" class="form-control" id="exampleInputPassword4" placeholder="price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">quantity</label>
                        <input name="quantity" value="{{$product->quantity}}" type="text" class="form-control" id="exampleInputPassword4" placeholder="quantity">
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection