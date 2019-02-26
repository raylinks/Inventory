@extends('layouts.master5')
@section('content')

<div id="app">
    <customer-view></customer-view>
</div>
    <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal4">
        <span class="glyphicon glyphicon-plus"></span> ADD CUSTOMER
    </button>
@endsection