@extends('layouts.dashboard_layout')

@section('header')
@include('dashboard-pages.header')
@stop

@section('nav')
@include('dashboard-pages.nav')
@stop

@section('body')
@include('dashboard-pages.faq')
@stop

@section('footer')
@include('dashboard-pages.footer')
@stop