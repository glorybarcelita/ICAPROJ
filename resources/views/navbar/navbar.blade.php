<nav class="navbar navbar-expand-lg navbar-light bg-info" >
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/icalogo.png') }}"  width="auto" height="35px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            @if(Auth::guest())
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a>
                
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
            </li>
            @elseif(Auth::user()->role_id == '4')   
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{  route('dashboard.index')  }}">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('subjects.index') }}">Subjects <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('learningresources.index') }}">Learning Resources <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="{{ url('achievers-wall') }}">Achiever's Wall<span class="sr-only">(current)</span></a>
                    </li>
                
                 {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('academichead/reports') }}">Reports <span class="sr-only">(current)</span></a>
                </li> --}}
            </ul>        
            
             @elseif(Auth::user()->role_id == '3')
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">            
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('learningresources.index') }}">Subjects <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('achievers-wall') }}">Achiever's Wall<span class="sr-only">(current)</span></a>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                
                    
                    <a class="dropdown-item" href="{{ url('reports/quiz') }}">Quiz</a>
                    <a class="dropdown-item" href="{{ url('reports/course') }}">Exam</a>
                        
                    </div>
                  </li>
            </ul>
            @elseif(Auth::user()->role_id == '2')   
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index')  }}">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('subjects.index') }}">Subjects <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learningresources.index') }}">Learning Resources <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('achievers-wall') }}">Achiever's Wall<span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    
                        
                        <a class="dropdown-item" href="{{ url('reports/quiz') }}">Quiz</a>
                        <a class="dropdown-item" href="{{ url('reports/exam') }}">Exam</a>
                            
                        </div>
                      </li>
                </ul>
            @elseif(Auth::user()->role_id == '1')
           
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">Courses <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('subjects.index') }}">Subjects <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">Users <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learningresources.index') }}">Learning Resources <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('achievers-wall') }}">Achiever's Wall<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    
                        
                        <a class="dropdown-item" href="{{ url('reports/user') }}">Users</a>
                        <a class="dropdown-item" href="{{ url('reports/subject') }}">Subjects</a>
                        <a class="dropdown-item" href="{{ url('reports/course') }}">Courses</a>
                        <a class="dropdown-item" href="{{ url('reports/learningresources') }}">Learning Resources</a>
                            
                        </div>
                      </li>

                    </ul>
                               
            @endif




            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="https://www.sparklabs.com/forum/styles/comboot/theme/images/default_avatar.jpg" class="rounded-circle" style="width: 20px; height: 20px" alt="Avatar"/> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                    <center><h6>{{ App\Models\Role::where('id', Auth::user()->role_id)->first()->name }}</h6></center>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('users/change-password') }}">Change Password</a>
                    <a class="dropdown-item" href="{{ url('logout') }}">
                        Logout
                    </a>
                </div>
              </li>
              @endauth
        </ul>
    </div>
</nav>    


