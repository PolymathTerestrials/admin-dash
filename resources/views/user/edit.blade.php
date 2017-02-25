@extends('layouts.master-admin')

@section('title')

    <title>Edit a User</title>

@endsection

@section('content')

    <div class="content-wrapper">


        <!-- Content Header (Page header) -->

        <section class="content-header">


            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/user/{{ $user->id }}">User</a></li>
                <li class="active">Edit User</li>

            </ol>

        </section>

        <!-- Main content -->

        <div class="container">

        <section class="content">


                <div class="row">

                    <div class ="col-xs-6">

                        <h1>Edit User</h1>

    <form class="form form-border" role="form" method="POST" action="{{ url('/user/'. $user->id) }}">

        <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- name Form Input -->

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <label class="control-label">User Name</label>

            <input type="text" class="form-control" name="name" value="{{ $user->name }}">

            @if ($errors->has('name'))

                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>

            @endif

        </div>



        <!-- is_admin Form Input -->

        <div class="form-group{{ $errors->has('is_admin') ? ' has-error' : '' }}">

            <label class="control-label">Is Admin?</label>


            <select class="form-control" id="is_admin" name="is_admin">
                <option value="{{ $user->is_admin }}">{{ $user->showAdminStatusOf($user) }}</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>


            @if ($errors->has('is_admin'))

                <span class="help-block">
                <strong>{{ $errors->first('is_admin') }}</strong>
                </span>

            @endif

        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Update

            </button>

        </div>

    </form>

    </div>

    </div>





    </section>

        </div>



    </div>



@endsection