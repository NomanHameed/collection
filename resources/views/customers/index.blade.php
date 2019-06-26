@extends('layout')
@section('title')
    Customer List
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Customer List</h1>
            <p><a href="customers/create">Add New Customer</a></p>
        </div>
    </div>

    <hr>
    @foreach($customers as $customer)
    <div class="row">
        <div class="col-md-2">
              {{ $customer->id }}
        </div>
        <div class="col-md-4">
            <a href="/customers/{{ $customer->id }}">
                {{ $customer->name }}
            </a>
        </div>
        <div class="col-md-4">{{ $customer->company->name }}</div>
        <div class="col-md-2">{{ $customer->active }}</div>
    </div>
    @endforeach
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
        {{--<div class="col-6">--}}
            {{--<h3>Inactive Customers</h3>--}}
            {{--<ul>--}}
                {{--@foreach($inactivecustomer as $inactive)--}}
                    {{--<li>--}}
                        {{--{{ 'Name: '. $inactive->name }} <span class="text-muted">--}}
                            {{--(Company: {{ $inactive->company->name }})--}}
                        {{--</span>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
    <hr>
    {{--<div class="row">--}}
        {{--<div class="col-12">--}}
            {{--@foreach($companies as $company)--}}
                {{--<h3>{{ $company->name }}</h3>--}}
                    {{--@foreach($company->customers as $customer)--}}
                        {{--<ul>{{ $customer->name }}</ul>--}}
                    {{--@endforeach--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection()