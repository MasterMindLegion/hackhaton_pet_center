@extends('layout')

@section('content')

<h1>Create a new Pet</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ action('Api\PetController@store') }}" >
        @csrf

    <div class="form-group">
        <label for="pet">Pet Name</label>
        <input type="text" name="pet" class="form-control" id="pet" placeholder="Pet name">
</div>

<div class="form-group">
    <select name="owner_id" id="owner_id">
        @foreach ($owners as $owner)
    <option value="{{$owner->id}}">{{$owner->first_name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
        <label for="breed">Breed</label>
        <input type="text" name="breed" class="form-control" id="breed" placeholder="Breed">
</div>
<div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" name="weight" class="form-control" id="weight" placeholder="Your Pets Weight">
</div>
<div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" id="age" placeholder="Your Pets Age">
</div>
<div class="form-group">
    <label for="photo"></label>
    <input type="text" name="photo" class="form-control" id="photo" placeholder="Photo">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
