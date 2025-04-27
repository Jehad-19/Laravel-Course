@extends('layout.app')
@section('content')
<h1>the products</h1>
<table border="1px">
    <tr>
        <th> Name </th>
        <th> Price </th>
    </tr>
        @foreach ($products as $g)
        <tr>
            <td>{{$g['name']}}</td>
            <td>{{$g['price']}}</td>
        </tr>      
        @endforeach  
</table>
@endsection