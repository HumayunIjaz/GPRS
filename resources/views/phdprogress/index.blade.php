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
                            <th>Progress Reprot 8</th>
                            <th>Progress Reprot 9</th>
                            <th>Progress Reprot 10</th>
                            <th>Progress Reprot 11</th>
                            <th>Progress Reprot 12</th>
                            <th>Semester 1</th>
                            <th>Semester 2</th>
                            <th>Semester 3</th>
                            <th>Semester 4</th>
                            <th>Semester 5</th>
                            <th>Semester 6</th>
                            <th>Semester 7</th>
                            <th>Semester 8</th>
                            <th>Semester 9</th>
                            <th>Semester 10</th>
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
                        @foreach ($pHDProgress as $phdprogress )
                            <tr>
                                <td>{{$var}}</td>
                                <td>{{$phdprogress['phdpro1']}}</td>
                                <td>{{$phdprogress['phdpro2']}}</td>
                                <td>{{$phdprogress['phdpro3']}}</td>
                                <td>{{$phdprogress['phdpro4']}}</td>
                                <td>{{$phdprogress['phdpro5']}}</td>
                                <td>{{$phdprogress['phdpro6']}}</td>
                                <td>{{$phdprogress['phdpro7']}}</td>
                                <td>{{$phdprogress['phdpro8']}}</td>
                                <td>{{$phdprogress['phdpro9']}}</td>
                                <td>{{$phdprogress['phdpro10']}}</td>
                                <td>{{$phdprogress['phdpro11']}}</td>
                                <td>{{$phdprogress['phdpro12']}}</td>
                                <td>{{$phdprogress['phdsms1']}}</td>
                                <td>{{$phdprogress['phdsms2']}}</td>
                                <td>{{$phdprogress['phdsms3']}}</td>
                                <td>{{$phdprogress['phdsms4']}}</td>
                                <td>{{$phdprogress['phdsms5']}}</td>
                                <td>{{$phdprogress['phdsms6']}}</td>
                                <td>{{$phdprogress['phdsms7']}}</td>
                                <td>{{$phdprogress['phdsms8']}}</td>
                                <td>{{$phdprogress['phdsms9']}}</td>
                                <td>{{$phdprogress['phdsms10']}}</td>
                                <td>{{$phdprogress['phdtne1']}}</td>
                                <td>{{$phdprogress['phdtne2']}}</td>
                                <td>{{$phdprogress['phdtne3']}}</td>
                                <td>{{$phdprogress['phdtne4']}}</td>
                                <td><a href ="{{ url('/phdprogress/'.$phdprogress['id'].'/edit') }}" >Edit</a></td>
                                <td>
                                    <form action ="{{action('PHDProgressController@destroy', $phdprogress['id'])}}" method="post">
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