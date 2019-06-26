@extends('layout')
@section('title','Details for ' .  $customer->name )
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Details for {{ $customer->name }}</h1>
        </div>
    </div>

    <hr>
    <a href="/customers/{{ $customer->id }}/edit">Edit</a>
    <br>
        <div class="row">

            <p><strong>{{ $customer->name }} </strong> | {{ $customer->email }} | {{ $customer->company->name }}  </p>
        </div>
@endsection()