        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a href="/dashboard">
                                <i class="far fa-check-square"></i>Dashboard</a>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Feature</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li class="has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-table"></i>Tables</a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li class="has-sub">
                                                    <a href="/calendar">
                                                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                                                </li>
                                                <li class="has-sub">
                                                    <a href="/map">
                                                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li class=" has-sub">
                                        <a href="form.html">
                                            <i class="far fa-check-square"></i>Forms</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Brands</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <div class="btn-group">
                                        <button type="button" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Walton
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item text-center" href="category">Add Catagory</a>
                                          <a class="dropdown-item text-center" href="{{route('posts.index')}}">Television</a>
                                          <a class="dropdown-item text-center" href="{{route('posts2.index')}}">Mobile</a>
                                        </div>
                                    </div>
                                </li>
                                <br>
                                <li>
                                    <div class="btn-group">
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Samsung
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item text-center" href="samtv">Television</a>
                                          <a class="dropdown-item text-center" href="sammob">Mobile</a>
                                        </div>
                                      </div>
                                </li>
                                <br>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->