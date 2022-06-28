@extends('admin.layouts.layout')

@section('orders')
active
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders</h2> <br>
            </div>
            
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th> № </th>
            <th>User name</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Color</th>
            <th>Count</th>
            <th>start date</th>
            <th>Action</th>
        </tr>
        @foreach ($order as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->count }}</td>
            <td>{{ $product->sum }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <form action="{{ route('orders.destroy',$product->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$order->links()}}
<style>
        .txt-wrap, td p {
        max-width: 200px;
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
      svg.w-5.h-5{
            display: none;
        }
    </style>


@endsection
