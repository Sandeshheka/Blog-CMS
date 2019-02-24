@extends('layouts.backend.main')

@section('title', 'MyBlog | Add New User')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          users
          <small>Add New User</small>
        </h1>
        <ol class="breadcrumb">
          <li class="{{url('/home')}}"><i class="fa fa-dashboard"></i> Dashboard</li>
          <li><a href="{{route('users.index')}}">users</a></li>
          <li class="active">Add New User</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($user,[
                      'method' => 'POST',
                      'route'  => 'users.store',
                      'files'  =>  TRUE,
                      'id'     => 'User-form'
                  ])!!}
                  @include('backend.users.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection


