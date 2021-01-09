@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<link href="{{ url('/css/cssstart.css') }}" rel="stylesheet">
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="tbl">
    <table>
        <tr id="header">
            <td style="font-style: italic;">No.</td>
            <td>Book Name</td>
            <td>Author</td>
            <td>Type</td>
            <td>Genre</td>
            <td>Action</td>
        </tr>
        @foreach ($booklist as $book)
        <tr id="items">
           <td style="font-style: italic;">{{ $book->b_id }}</td>
           <td>{{ $book->b_name }}</td>
           <td>{{ $book->b_author }}</td>
           <td>{{ $book->b_type }}</td>
           <td>{{ $book->b_genre }}</td>
           <td><a href="{{ route('books.show' , $book->b_id) }}"><button>Details</button></a></td>
        </tr>
        @endforeach
    </table>
    
    </div>
@endsection