@extends('layout.app')
@section('content')
<h1>the products</h1>
<table>
    <tr>
        <td> Name </td>
        <td> Price </td>
    </tr>
        @foreach ($products as $g)
        <tr>
            <td>{{$g['name']}}</td>
            <td>{{$g['price']}}</td>
        </tr>      
        @endforeach  
</table>
@endsection