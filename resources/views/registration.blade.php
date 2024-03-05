@extends('layout')
@section('title', 'Registration')
@section('content')

<div class="container">
    <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
    @csrf
        <div class="mb-3">
        <label for = "exampleInputEmail" class="form-label">Fullname</label>
        <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="Email" class="form-control" name="email">
        </div>

        <div class="mb-3 form-check">
        <label class="form-label" >IC Number</label>
        <input type="password" class="form-control" name="password">
        
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
        
    </form>
</div>

@endsection


