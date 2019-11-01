@extends('layout')

@section('content')
    <h1>Create a new Owner</h1>
    <form method="post" action="{{ action('Api\OwnerController@store') }}" >
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname" placeholder="surname">
        </div>
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="enter email">
        </div>
        <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection