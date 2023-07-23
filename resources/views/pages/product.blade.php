@extends('layouts.layout')

@section('title')
    Product
@endsection

@section('main')
    <h1>Product</h1>
    <p># {{ $number }}</p>
    <hr>
    <p>Route : {{ $route }}</p>
@endsection
