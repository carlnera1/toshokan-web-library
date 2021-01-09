@extends('layouts.app')
@section('title')
Add Book
@endsection

@section('content')
<link href="{{ url('/css/csscreate.css') }}" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<h5>Add a Book</h5>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="formc">
        <ul>
            <li>
                <label for="b_name">Book Name:*</label>
                <input type="text" name="b_name" placeholder="Book Name">
            </li>
            <li>
                <label for="b_author">Author:*</label>
                <input type="text" name="b_author" placeholder="Book Author">
            </li>
            <li>
                <label for="b_type">Type:*</label>
                <select name="b_type" class="form-control">
                    <option value='1'>Fiction</option>
                    <option value='0'>Non-Fiction</option>
                </select>
            </li>
            <li>
                <label for="b_genre">Genre:*</label>
                <select name="b_genre" class="form-control">
                    <option value='Action'>Action</option>
                    <option value='Adventure'>Adventure</option>
                    <option value='Self-Help'>Self-Help</option>
                    <option value='Biography'>Biography</option>
                </select>
            </li>
            <li>
                <label for="b_amazon">Amazon Link:</label>
                <input type="text" name="b_amazon" placeholder="Amazon URL Link">
            </li>
            <li>
                <label for="b_desc">Description:</label><textarea rows="5" cols="50" name="b_desc" placeholder="Insert Book Description Here"></textarea>
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </div>
</form>

@endsection
