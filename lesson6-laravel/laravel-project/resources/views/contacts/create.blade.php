<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.app')

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
@section('content')
    <h1>Create New Contact</h1>
    <form action="{{ route('contact.store')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <!-- この行にinputを追加 -->
        <input type="text" name="name" id="name">
        <label for="phone_number">Phone Number:</label>
        @error('phone_number')
        <div class=""{{ $message }}></div>
        @enderror
        <!-- この行にinputを追加 -->
        <input type="text" name="phone_number" id="phone_number">
        <label for="email">Email:</label>
        <!-- この行にinputを追加 -->
        <input type="email" name="email" id="email">
        <button type="submit">Create</button>
    </form>
@endsection
