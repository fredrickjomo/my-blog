@extends('layouts.admin')
<style>
    .list-group{
        margin-left: 15%;

    }
    .list-group .list-group-item{
        list-style-type: circle;
    }
    ul li{
        list-style-type: circle;
    }
</style>
@section('header')
To do list
    @endsection
@section('page-icon')
    <i class="fa fa-list"></i>
    @endsection
@section('content')
    <ul class="list-group col-md-8">
        <li class="list-group-item">View Current Posts</li>
        <li class="list-group-item">Add new post(s)</li>
        <li class="list-group-item">Edit / Update already uploaded post(s)</li>
        <li class="list-group-item">Delete already uploaded post(s)</li>
        <li class="list-group-item">View users who have accounts within the blog</li>
        <li class="list-group-item">Delete user(s)</li>
    </ul>

    @endsection