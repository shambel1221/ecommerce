@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('catagory/register') }}" role="button"> {{ __('New Catagory') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Catagory List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
 name
 </th>

 </tr>
 </thead>
 <tbody>
 @foreach($catagory as $catagory)
 <tr>
 <td> {{ $catagory->id }}</td>
 <td> {{ $catagory->name }}</td>
 <td>
 <!--<a class="btn btn-xs btninfo" title="Detail" href="/catagory/search/{{ $catagory->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/catagory/edit/{{$catagory->id }}">Edit</a>-->
 <a class="btn btn-xs btndanger" title="Delete" href="/catagory/delete/{{ $catagory->id }}">delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection