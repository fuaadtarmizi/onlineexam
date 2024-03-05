@extends('layout')
@section('title', 'Login')
@section('content')

<div class="container">
    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
         @csrf

        <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3 form-check">
        <label class="form-label" >IC</label>
        <input type="password" class="form-control" name="password">
        
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
        
    </form>
</div>

@endsection


