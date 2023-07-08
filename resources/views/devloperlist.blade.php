@extends('layout')

@section('title', 'Product')

@section('content')
    <a class="btn btn-success mt-2" href="/product/create">Create Employee</a>
    <h1>Product</h1>
    @if(session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif
    <!-- Additional content specific to the index page -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Designation</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach($devloper as $devlopers)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$devlopers->name}}</td>
      <td>{{$devlopers->email}}</td>
      <td>{{$devlopers->phone}}</td>
      <td>{{$devlopers->designation}}</td>
      <td><a href="product/{{$devlopers->id}}/edit" class="btn btn-success">Edit</a></td>
      <td><a href="product/{{$devlopers->id}}/delete" class="btn btn-danger">delete</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection
