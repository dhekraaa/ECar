@extends('layouts.app')

@section('content')

<h2>With iterator </h2>
<table>
  <tr>
    <th>Name</th>
    <th>Color</th>
    <th>Description</th>
    <th>Price</th>
  </tr>
@foreach($productCollection as $product){
    <tr>
    <td>{{$product['p_name']}}</td>
    <td>{{$product['p_color']}}</td>
    <td>{{$product['description']}}</td>
    <td>{{$product['price']}}</td>
    </tr>
}

@endforeach
@endsection
