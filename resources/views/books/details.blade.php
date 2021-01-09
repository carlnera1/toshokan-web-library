@extends('layouts.app')

@section('title')
Detail
@endsection

@section('content')
<link href="{{ url('/css/cssdetails.css') }}" rel="stylesheet">
<h5>Book Details</h5>
<div class="detailform">
    <table>
        <tr>
            <td><b>Book ID Number:</b></td>
            <td name="bx_id">{{$bookdetails->b_id}}</td>
        </tr>
        <tr>
            <td><b>Book Name:</b></td>
            <td>{{$bookdetails->b_name}}</td>
        </tr>
        <tr>
            <td><b>Book Author:</b></td>
            <td>{{$bookdetails->b_author}}</td>
        </tr>
        <tr>
            <td><b>Book Type:</b></td>
            <td>{{$bookdetails->b_type}}</td>
        </tr>
        <tr>
            <td><b>Book Genre:</b></td>
            <td>{{$bookdetails->b_genre}}</td>
        </tr>
        <tr>
            <td><b>Book Description:</b></td>
            <td>{{$bookdetails->b_desc}}</td>
        </tr>
        <tr>
            <td><b>Amazon Link:</b></td>
            <td>{{$bookdetails->b_amazon}}</td>
        </tr>
        <tr>
            <td><b>Action:</b></td>
            <td>
                <a href="{{ route('books.edit' , $bookdetails->b_id) }}"><button title="edit">Edit</button></a>
                <form action="{{ route('books.destroy', $bookdetails->b_id) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" title="delete">Delete</button>
                </form>
            </td>
        </tr>
    </table>
</div>

@endsection