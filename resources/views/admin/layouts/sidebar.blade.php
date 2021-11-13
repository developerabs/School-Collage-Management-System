@php
    $prefix = Request::route()->getPrefix(); 
@endphp
<div id="sidebar" class="sidebar">
  <div class="sidebar-content">
      <!-- sidebar-menu  -->
      <div class="sidebar-menu">
          <ul>
              <li class="header-menu">
                  Categories
              </li>
              <li class="active">
                  <a href="/">
                      <i class="ti-dashboard"></i>
                      <span class="menu-text">Dashboard</span>
                  </a>
              </li>
              <li class="maincat ">
                  <a href="#">
                      <i class="fa fa-user-o"></i>
                      <span class="menu-text">Users</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li >
                              <a href="{{ route('user.add') }}">Add Users</a>
                          </li>
                          <li >
                              <a href="{{ route('user.view') }}">View Users</a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="maincat {{ ($prefix == '/setups') ? 'active':'' }}">
                  <a href="#">
                      <i class="ti-palette"></i>
                      <span class="menu-text">Setup Management</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li>
                              <a href="{{ route('class.view') }}">Student Class</a>
                          </li>
                          <li >
                              <a href="{{ route('year.view') }}">Student Year</a>
                          </li> 
                          <li >
                              <a href="{{ route('group.view') }}">Student Group</a>
                          </li> 
                          <li >
                              <a href="{{ route('shift.view') }}">Student Shift</a>
                          </li> 
                          <li >
                              <a href="{{ route('feeCategory.view') }}">Student Fee Category</a>
                          </li> 
                      </ul>
                  </div>
              </li>
              <li class="maincat ">
                  <a href="#">
                      <i class="ti-layout-grid2"></i>
                      <span class="menu-text">Tables</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li >
                              <a href="tb_basic.html">Basic Tables</a>
                          </li>
                          <li >
                              <a href="tb_datatables.html">Datatables</a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="maincat ">
                  <a href="#">
                      <i class="ti-write"></i>
                      <span class="menu-text">Forms</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li >
                              <a href="fm_control.html">Form Control</a>
                          </li>
                          <li class="tier1 ">
                              <a href="#"><span class="menu-text">CKEditor</span></a>
                              <div class="subcat">
                                  <ul>
                                      <li >
                                          <a href="fm_ckeditor_inline.html">Inline</a>
                                      </li>
                                      <li >
                                          <a href="fm_ckeditor_classic.html">Classic</a>
                                      </li>
                                      <li >
                                          <a href="fm_ckeditor_balloon.html">Balloon</a>
                                      </li>
                                      <li >
                                          <a href="fm_ckeditor_block.html">Balloon Block</a>
                                      </li>
                                      <li >
                                          <a href="fm_ckeditor_document.html">Document</a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="maincat ">
                  <a href="#">
                      <i class="ti-bar-chart"></i>
                      <span class="menu-text">Charts</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li >
                              <a href="ch_apexcharts.html">Apex Charts</a>
                          </li>
                          <li >
                              <a href="javascript:;">amCharts</a>
                          </li>
                          <li >
                              <a href="javascript:;">Morris Charts</a>
                          </li>
                          <li >
                              <a href="javascript:;">Flot Charts</a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="header-menu">
                  Extra
              </li>
              <li class="maincat ">
                  <a href="#">
                      <i class="ti-file"></i>
                      <span class="menu-text">Pages</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li >
                              <a href="pg_login.html" target="_blank">Login</a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="maincat">
                  <a href="#">
                      <i class="ti-layers-alt"></i>
                      <span class="menu-text">Multi-Levels Menu</span>
                  </a>
                  <div class="subcat">
                      <ul>
                          <li class="tier1">
                              <a href="javascript:;">Tier 1</a>
                              <div class="subcat">
                                  <ul>
                                      <li><a href="javascript:;">Level 2</a></li>
                                      <li><a href="javascript:;">Level 2</a></li>
                                  </ul>
                              </div>
                          </li>
                          <li>
                              <a href="javascript:;">Submenu</a>
                          </li>
                          <li>
                              <a href="javascript:;">Submenu</a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="">
                  <a href="documentation.html">
                      <i class="ti-agenda"></i>
                      <span class="menu-text">Documentation</span>
                      <span class="badge badge-pill badge-primary">New</span>
                  </a>
              </li>
              <li class="">
                  <a href="ex_calendar.html">
                      <i class="ti-calendar"></i>
                      <span class="menu-text">Calendar</span>
                      <span class="badge badge-pill badge-primary">New</span>
                  </a>
              </li>
              <li>
                  <a href="https://github.com/siQuang/siqtheme" target="_blank">
                      <i class="ti-github"></i>
                      <span class="menu-text">Github/siQtheme</span>
                  </a>
              </li>
          </ul>
      </div>
      <!-- sidebar-menu  -->
  </div>
</div>