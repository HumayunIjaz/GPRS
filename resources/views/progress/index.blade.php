@extends('layouts.app')
@section('content')
    <div class="main-container ace-save-state" id="main-container">
        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            @include('layouts.sideBar')
        </div>
        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Progress Reprot 1</th>
                            <th>Progress Reprot 2</th>
                            <th>Progress Reprot 3</th>
                            <th>Progress Reprot 4</th>
                            <th>Progress Reprot 5</th>
                            <th>Progress Reprot 6</th>
                            <th>Progress Reprot 7</th>
                            <th>Semester 1</th>
                            <th>Semester 2</th>
                            <th>Semester 3</th>
                            <th>Semester 4</th>
                            <th>Tenure 1</th>
                            <th>Tenure 2</th>
                            <th>Tenure 3</th>
                            <th>Tenure 4</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $var=1?>
                        @foreach ($progress as $progress )
                            <tr>
                                <td>{{$var}}</td>
                                <td>{{$progress['pro1']}}</td>
                                <td>{{$progress['pro2']}}</td>
                                <td>{{$progress['pro3']}}</td>
                                <td>{{$progress['pro4']}}</td>
                                <td>{{$progress['pro5']}}</td>
                                <td>{{$progress['pro6']}}</td>
                                <td>{{$progress['pro7']}}</td>
                                <td>{{$progress['sms1']}}</td>
                                <td>{{$progress['sms2']}}</td>
                                <td>{{$progress['sms3']}}</td>
                                <td>{{$progress['sms4']}}</td>
                                <td>{{$progress['tne1']}}</td>
                                <td>{{$progress['tne2']}}</td>
                                <td>{{$progress['tne3']}}</td>
                                <td>{{$progress['tne4']}}</td>
                                <td><a href ="{{ url('/progress/'.$progress['id'].'/edit') }}" >Edit</a></td>
                                <td>
                                    <form action ="{{action('ProgressController@destroy', $progress['id'])}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="_mothod" value="DELETE">
                                        <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
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