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
                            <th>Date</th>
                            <th>DPC No#</th>
                            <th>Diary No#</th>
                            <th>Date</th>
                            <th>Recomandation</th>
                            <th>DPCC No#</th>
                            <th>Date</th>
                            <th>ASRB No#</th>
                            <th>Date</th>
                            <th>Extension</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $var=1?>
                        @foreach ($extensions as $extension )
                            <tr>
                                <td>{{$var}}</td>
                                <td>{{$extension['diary_no']}}</td>
                                <td>{{$extension['date']}}</td>
                                <td>{{$extension['dpc_no']}}</td>
                                <td>{{$extension['dpc']}}</td>
                                <td>{{$extension['dpcdate']}}</td>
                                <td>{{$extension['dpcreomnd']}}</td>
                                <td>{{$extension['dpcc']}}</td>
                                <td>{{$extension['dpccdate']}}</td>
                                <td>{{$extension['asrb']}}</td>
                                <td>{{$extension['asrbdate']}}</td>
                                <td>{{$extension['extension']}}</td>
                                <td><a href ="{{ url('/extension/'.$extension['id'].'/edit') }}" >Edit</a></td>
                                <td>
                                    <form action ="{{action('ExtensionController@destroy', $extension['id'])}}" method="post">
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