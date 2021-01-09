@extends('layouts.app')

@section('title')
About
@endsection

@section('content')
<div class="about">
<h5>About This Project</h5>
<p>

Toshokan (図書館) also known in Japanese as 'Library'. This is a simple website created to manage and store basic information of books
commonly found at Amazon.com.
<br>---<br>
It is a personal project created with <b>Laravel</b> and <b>SQL Server 2017</b>. The website is currently in its version 1.0 so its features are quite minimal and basic for now. 
<br>---<br>
This website can be used manage and store basic information of books found at Amazon.com.
See more projects at<a href="https://github.com/carlnera1/carlnera_portfolio">Github</a>
<br>---<br>
Thank you!
</p>
</div>

<style type = text/css>

.about h5{
    background-color:  rgb(199, 199, 199);
    margin: 0px;
    font-size:20px;
    padding-top:10px;
    padding-bottom:5px;
}

.about p{
    margin: 0px;
    background-color:  rgb(199, 199, 199);
    padding-bottom:15px;
}

</style>
@endsection