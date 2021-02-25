@extends('layouts.app')
@section('content')
    <div class="main-container ace-save-state" id="main-container">
        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            @include('layouts.sideBar')
        </div>
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                    @elseif(\Session::has('danger'))
                        <div class="alert alert-danger" >
                            <p>{{\Session::get('danger')}}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Supervisor Name</th>
                            <th>Designation</th>
                            <th>View</th>
                            @if(Auth::user()->role == 'admin' )
                            <th>Edit</th>
                            <th>Deleted</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        <?php $var=1?>
                        @foreach ($supervisors as $supervisor )
                            <tr>
                                <td>{{ $var}}</td>
                                <td>{{$supervisor ['name']}}</td>
                                <td>{{$supervisor ['designation']}}</td>
                                <td><a href ="{{ url('/supervisor/'.$supervisor['name'])}}" >View</a></td>
                                @if(Auth::user()->role == 'admin' )
                                <td><a href ="{{ url('/supervisor/'. $supervisor['id'].'/edit') }} " >Edit</a></td>
                                    <td>
                                        <form action ="{{action('SupervisorController@destroy', $supervisor['id'])}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="_mothod" value="DELETE">
                                            <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                @endif
                                    <?php $var++?>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="alert alert-block alert-success">
                                </div>
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content-->
        </div>
@endsection