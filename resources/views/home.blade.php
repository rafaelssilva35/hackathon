@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User info</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    <tr>
                        <td>{{auth()->user()->name}}</td>
                        <td>{{auth()->user()->email}}</td>
                        <td>
                            <div class="row">
                                <button  class="btn col-md-6" ><a href="{{url('edit')}}">Edit</a></button>
                                <form method="POST" class="col-md-6" action="{{route('edit.destroy', auth()->user()->id)}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button class="btn col-12" type="submit" >SignOut</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
