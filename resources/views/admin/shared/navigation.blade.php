<aside class="aside-container">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
          <nav class="sidebar">
            <!-- START sidebar nav-->
            <ul class="sidebar-nav">
              <!-- START user info-->
                <li class="has-user-block">
                    <div class="collapse show" id="user-block">
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                   <!--  <img class="img-thumbnail rounded-circle" src="{{ asset('admin/img/user/02.jpg') }}" alt="Avatar" width="60" height="60"> -->
                                    <div class="circle bg-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">{{Auth::user()->name}}</span>
                                <span class="user-block-role"></span>
                            </div>
                        </div>
                    </div>
                </li>
              <!-- END user info-->
              <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span>Trinco campus</span>
                </li>
              <li class="{{ isActiveRoute('dashboard') }}">
                <a href="/course">
                  <em class="icon-speedometer"></em>
                  <span>Course</span>
                </a>
              </li>
              <li class=" ">
                <a href="/acc_year" title="Widgets">
                  <!-- <div class="float-right badge badge-success">30</div> -->
                  <em class="icon-grid"></em>
                  <span>Academic Year</span>
                </a>
              </li>
              <li class=" ">
                <a href="/student"title="Layouts">
                  <em class="icon-layers"></em>
                  <span>Student</span>
                </a>
              </li>
  <li class=" ">
                <a href="/attendance"title="Layouts">
                  <em class="icon-layers"></em>
                  <span>Attendance</span>
                </a>
              </li>

     


        
        
            </ul>
            <!-- END sidebar nav-->
          </nav>
        </div>
        <!-- END Sidebar (left)-->
      </aside>