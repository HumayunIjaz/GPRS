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
                            <th>Application No</th>
                            <th>Application Date</th>
                            <th>Thesis Title</th>
                            <th>Supervisor</th>
                            <th>Co-Supervisor</th>
                            <th>DDPC No</th>
                            <th>Dairy No</th>
                            <th>DPCC Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $var=1?>
                        @foreach ($thesiss as $thesis )
                            <tr>
                                <td>{{$var}}</td>
                                <td>{{$thesis['Fnumber']}}</td>
                                <td>{{$thesis['Fdate']}}</td>
                                <td>{{$thesis['title']}}</td>
                                <td>{{$thesis['supervisor']}}</td>
                                <td>{{$thesis['csupervisor']}}</td>
                                <td>{{$thesis['Ddairy']}}</td>
                                <td>{{$thesis['Dnumber']}}</td>
                                <td>{{$thesis['Ddate']}}</td>
                                <td><a href ="{{ url('/thesis/'.$thesis['id'].'/edit') }}" >Edit</a></td>
                                <td>
                                    <form action ="{{action('ThesisController@destroy', $thesis['id'])}}" method="post">
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