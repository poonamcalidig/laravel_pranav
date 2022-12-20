@extends('main.common')
@section('main-content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Orders</h1>
        </div>

        <div class="row">

            <div class="col-lg-8 ">

                <form class="user" method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select class="form-control" name="product_id">
                                @foreach ($products as $product)
                                    <option value="" disabled selected>Select Product</option>
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block w-50">
                        Order Now
                    </button>
                </form>


            </div>
        </div>

    </div>
@endsection
