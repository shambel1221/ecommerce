@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Catagory Detail') }}
 </div>
 <div class="card-body">

 <table class="table table-striped table-bordered ">

 <thead class="thead-inverse">
 <tr>
 <th>
 ID
 </th>
 <th>
 Catagory 
 </th>
 </tr>
 <tr>
 <td>{{ $catagory->id }}</td>

<td> {{ $catagory->name }}</td>
 </tr>
 </thead>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('catagory/list') }}" role="button" style="text-align:center;"> {{ __('Back') }}</a>
 </div>
</div>
@endsection