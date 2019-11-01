@extends('layouts.app')

@section('content')
    <h1>Create a new Person</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ action('PetController@store') }}">
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
                <label for="phone">Bio</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number">
        </div>
        <div class="form-group">
                <label for="pet">Pet Name</label>
                <input type="text" name="pet" class="form-control" id="pet" placeholder="Pet name">
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
        {{-- <div class="form-group">
            <label for="profession">Profession</label>

            <select name="profession_id" id="profession">
                @foreach($professions as $profession)
                    <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                @endforeach
            </select>

        </div> --}}


    </form>
@endsection
