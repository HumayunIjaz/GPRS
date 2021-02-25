@extends('layouts.app')
@section('content')
    <div class="main-container ace-save-state" id="main-container">
        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            @include('layouts.sideBar')
        </div>
        <div class="main-content">
            <div class="main-content-inner">

                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <form action="{{ route('filter') }}" name="contact-form" class="form-horizontal" role="form" method="post"  autocomplete="off" >
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{\Session::get('success')}}</p>
                            </div>
                        @elseif(\Session::has('danger'))
                            <div class="alert alert-danger" >
                                <p>{{\Session::get('danger')}}</p>
                            </div>
                        @endif
                        <div class="form-group" style="padding-top: 15px">
                            <label  class="col-sm-2 control-label">Roll Number:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="" name="roll_number" placeholder="Roll Number"/>
                            </div>
                            <div class="col-sm-offset-0 col-sm-1">
                                <select class="form-control" id="degree" name="degree" >
                                    <option value=""></option>
                                    <option value="MPhil">MPhil</option>
                                    <option value="PhD">PHD</option>

                                </select>
                            </div>

                            <div class="col-sm-offset-0 col-sm-1">
                                <select class="form-control" id="fall" name="fall" >
                                    <option value=""></option>
                                    <option value="Fall16">Fall16</option>
                                    <option value="Fall17">Fall17</option>
                                    <option value="Fall18">Fall18</option>
                                    <option value="Fall19">Fall19</option>
                                    <option value="Fall20">Fall20</option>
                                </select>
                            </div>

                            <div class="col-sm-2">
                                <button style="margin-top: 0px" type="submit" name="sub" class="btn btn-info btn-block form-control">Search
                                <i class="ace-icon fa fa-check bigger-110"></i></button>
                            </div>

                        </div>

                    </form>
                    <script type="text/javascript">
                        document.getElementById('roll_number').value="<?php echo $roll_number; ?>"
                        document.getElementById('fall').value = "<?php echo $fall; ?>"
                        document.getElementById('degree').value = "<?php echo $degree; ?>"
                    </script>

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Roll Number</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Degree</th>
                            <th>Degree Title</th>
                            <th>FALL</th>
                            <th>Status</th>
                            <th>CrHr</th>
                            <th>View</th>
                        </tr>
                        </thead>
                @if($students==true)
                        <tbody>
                        <?php $var=1?>
                        @foreach ($students as $student )
                            <tr >
                                <td style="text-align:center">{{$var}}</td>
                                <td style="text-align:center">{{$student['roll_number']}}</td>
                                <td>{{$student['name']}}</td>
                                <td style="text-align:center">{{$student['contact']}}</td>
                                <td style="text-align:center">{{$student['degree']}}</td>
                                <td style="text-align:center">{{$student['degree_title']}}</td>
                                <td style="text-align:center">{{$student['fall']}}</td>
                                @if($student['status']=='PASS')
                                <td style="text-align:center" bgcolor="green">{{$student['status']}}</td>

                                @endif
                                @if($student['status']=='Continue')
                                    <td style="text-align:center" bgcolor="yellow">{{$student['status']}}</td>
                                @endif
                                @if($student['status']=='Dropout'||$student['status']=='Admission Cancel' ||$student['status']=='Left')
                                    <td style="text-align:center" bgcolor="red">{{$student['status']}}</td>
                                @endif
                                    <td style="text-align:center">{{$student['Cr_Hr']}}</td>
                                <td><a href ="{{ url('/student/'.$student['id']) }}" >View</a></td>
                                @if(Auth::user()->role == 'admin' )

                                    @endif
                                <?php $var++?>
                                @endforeach
                            </tr>
                        </tbody>
                        @endif
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