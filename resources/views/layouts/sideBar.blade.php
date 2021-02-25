

<ul class="nav nav-list">
    <li class="active">
        <a href="{{ url ('/')}} " >
            <i class="menu-icon fa fa-"></i>
            <span class="menu-text"> GPRS </span></a>
        <b class="arrow"></b>
    </li>
    @if(Auth::user()->role == 'admin' )
    <li class="">
        <a href="{{ url('student/create')}} "  >
            <i class="menu-icon glyphicon glyphicon-education"></i>
            <span class="menu-text">Add Students</span></a>
        <b class="arrow"></b>
    </li>

        <li class="">
            <a href="{{ url ('student')}} " >
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Students List</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('thesis/create')}}">
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Thesis Registration</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('synopsis/create')}}">
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Synopsis Registration</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('progress/create')}}">
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">MPhil Progress</span></a>
            <b class="arrow"></b>
        </li>
        <li class="">
            <a href="{{ url('phdprogress/create')}}">
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">PHD Progress</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('extension/create')}}">
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Extension Create</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('examiner/create')}}">
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Examiner Create</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url('supervisor/create')}} "  >
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Add Supervisor</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url ('supervisor')}} " >
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">List of Supervisor</span></a>
            <b class="arrow"></b>
        </li>
    @endif
    @if(Auth::user()->role == 'superAdmin')

        <li class="">
            <a href="{{ url ('student')}} " >
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">Students List</span></a>
            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ url ('supervisor')}} " >
                <i class="menu-icon glyphicon glyphicon-education"></i>
                <span class="menu-text">List of Supervisor</span></a>
            <b class="arrow"></b>
        </li>

    @endif

</ul>