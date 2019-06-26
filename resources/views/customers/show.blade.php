@extends('layout')
@section('title','Details for ' .  $customer->name )
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Details for {{ $customer->name }}</h1>
        </div>
    </div>

    <hr>
    <div class="row">
        <a class="btn btn-primary" href="/customers/{{ $customer->id }}/edit">Edit</a>

        <form style="margin-left: 20px" action="/customers/{{ $customer->id }}" method="post">
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
            @csrf
    </form>
    </div>
    <br>
        <div class="row">

            <p><strong>{{ $customer->name }} </strong> | {{ $customer->email }} | {{ $customer->company->name }}  </p>
        </div>
@endsection()