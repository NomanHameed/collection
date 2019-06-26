@extends('layout')
@section('title','Edit Details For ' . $customer->name)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Details For {{ $customer->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="/customers/{{ $customer->id }}" method="POST" class="pb-3">
                @method('PATCH')
                @include('customers/form')

                <br>

                <button type="submit" class="btn btn-primary">Save Customer</button>
            </form>
        </div>
    </div>
    <hr>

    {{--<div class="row">--}}
        {{--<div class="col-6">--}}
            {{--<h3>Active Customers</h3>--}}
            {{--<ul>--}}
                {{--@foreach($activecustomer as $active)--}}
                    {{--<li>--}}
                        {{--{{ 'Name: '. $active->name }}--}}
                        {{--<span class="text-muted">--}}
                            {{--(Company: {{ $active->company->name }})--}}
                        {{--</span>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}

@endsection()