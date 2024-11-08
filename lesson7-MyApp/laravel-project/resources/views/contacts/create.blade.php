<!-- resources/views/contacts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create New Contact</h1>
    <form action="{{ route('contact.store')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <!-- この行にinputを追加 -->
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number">
        <!-- この行にinputを追加 -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <!-- この行にinputを追加 -->
        <button type="submit">Create</button>
    </form>
@endsection
