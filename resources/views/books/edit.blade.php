@extends('layouts.app')

@section('content')

<link href="{{ url('/css/csscreate.css') }}" rel="stylesheet">
<h5>Edit Book Details</h5>

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

<form action="{{route('books.update', $bookdetails->b_id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="formc">
        <ul>
            <li>
                <label for="b_name">Book Name:*</label>
                <input type="text" name="b_name" placeholder="Book Name" value="{{$bookdetails->b_name}}">
            </li>
            <li>
                <label for="b_author">Author:*</label>
                <input type="text" name="b_author" placeholder="Book Author" value="{{$bookdetails->b_author}}">
            </li>
            <li>
                <label for="b_type">Type:*</label>
                <select name="b_type" class="form-control">
                    @if ($bookdetails->b_type == 'Fiction')
                        <option value='1'>Fiction</option>
                        <option value='0'>Non-Fiction</option>
                    @else
                        <option value='0'>Non-Fiction</option>
                        <option value='1'>Fiction</option>
                    @endif
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
                <input type="text" name="b_amazon" placeholder="Amazon URL Link" value="{{$bookdetails->b_amazon}}">
            </li>
            <li>
                <label for="b_desc">Description:</label>
                <textarea rows="5" cols="50" name="b_desc" placeholder="Insert Book Description Here" value="{{$bookdetails->b_desc}}"></textarea>
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </div>
</form>



@endsection