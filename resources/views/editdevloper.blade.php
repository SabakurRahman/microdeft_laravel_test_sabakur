@extends('layout')

@section('title', 'Create Product')

@section('content')
  
    <h1>Employe</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form method="POST" action="/devloper/{{$devloper->name}}/update" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name',$devloper->name)}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"  value="{{old('email',$devloper->email)}}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control"  value="{{old('phone',$devloper->phone)}}">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control"  value="{{old('designation',$devloper->designation)}}">
                        @error('designation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="php" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   php
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="js" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   js
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="laravel" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   Laravel
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="React Js" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   React Js
  </label>
</div>
                  
                   
                    <button type="submit" class="btn btn-dark mt-2">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- Additional content specific to the create page -->
@endsection
