
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="/companies/{!!$company!!}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="#">
                          <i class="fa fa-user-o"></i>
                          <span>Customers</span>
                      </a>
                      <ul class="sub">
                          <li><a href="/companies/{!!$company!!}/customers">Manage</a></li>
                          <li><a  href="#">Hello</a></li>
                      </ul>
                  </li>
                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Company statistics</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <!--multi level menu end-->



                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Logged in users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="lobby.html">Lobby</a></li>
                          <li><a  href="chat_room.html"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="login.html">
                          <i class="fa fa-user"></i>
                          <span>Revenue</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Admin panel</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="lobby.html">Company profile</a></li>
                          <li><a  href="chat_room.html"> Edit information</a></li>
                                  <li class="sub-menu">
                                      <a  href="javascript:;">Workers</a>
                                      <ul class="sub">
                                            <li><a href="/companies/{!!$company!!}/workers">Manage</a></li>
                                      </ul>
                                  </li>
                          <li><a  href="chat_room.html">Email templates</a></li>
                          <li><a  href="chat_room.html">Reports</a></li>
                          <li><a  href="chat_room.html">Payment information</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Quotes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="lobby.html">New quote</a></li>
                          <li><a  href="chat_room.html">Drafts</a></li>
                      </ul>
                  </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
