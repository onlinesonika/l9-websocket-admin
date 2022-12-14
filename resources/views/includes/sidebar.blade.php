<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano has-scrollbar">
                <div class="nano-content" tabindex="0" style="right: -15px;">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <span class="label label-success pull-right">New</span>
                                <img class="img-circle img-sm img-border" src="{{ Vite::asset('resources/img/profile-photos/1.png') }}"
                                    alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{ Auth::user()->name }}</p>
                                <span class="mnp-desc">{{ Auth::user()->email }}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-nav-link :href="route('logout')" class="list-group-item"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="demo-pli-unlock icon-lg icon-fw"></i> {{ __('Log Out') }}
                                </x-nav-link>
                            </form>
                        </div>
                    </div>


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut">
                        <ul class="list-unstyled">
                            <li class="col-xs-3" data-content="My Profile" data-original-title="" title="">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-male"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages" data-original-title="" title="">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-speech-bubble-3"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity" data-original-title="" title="">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-thunder"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen" data-original-title="" title="">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-lock-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="active-link">
                            <a href="index.html">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                </span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-split-vertical-2"></i>
                                <span class="menu-title">
                                    <strong>Layouts</strong>
                                </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
                                <li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
                                <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
                                <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
                                <li class="list-divider"></li>
                                <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                                <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                                <li><a href="layouts-aside-dark-theme.html">Dark version of aside</a></li>
                                <li class="list-divider"></li>
                                <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                                <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="widgets.html">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
                                    <strong>Widgets</strong>
                                    <span class="pull-right badge badge-warning">24</span>
                                </span>
                            </a>
                        </li>

                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">Components</li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-boot-2"></i>
                                <span class="menu-title">UI Elements</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-progress-bars.html">Progress bars</a></li>
                                <li><a href="ui-components.html">Components</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-list-group.html">List Group</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-alerts-tooltips.html">Alerts &amp; Tooltips</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-pen-5"></i>
                                <span class="menu-title">Forms</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="forms-general.html">General</a></li>
                                <li><a href="forms-components.html">Advanced Components</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-wizard.html">Wizard</a></li>
                                <li><a href="forms-file-upload.html">File Upload</a></li>
                                <li><a href="forms-text-editor.html">Text Editor</a></li>
                                <li><a href="forms-markdown.html">Markdown</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-receipt-4"></i>
                                <span class="menu-title">Tables</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="tables-static.html">Static Tables</a></li>
                                <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-footable.html">Foo Tables</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="charts.html">
                                <i class="demo-psi-bar-chart"></i>
                                <span class="menu-title">Charts</span>
                            </a>
                        </li>

                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">More</li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-repair"></i>
                                <span class="menu-title">Miscellaneous</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="misc-timeline.html">Timeline</a></li>
                                <li><a href="misc-calendar.html">Calendar</a></li>
                                <li><a href="misc-maps.html">Google Maps</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-mail"></i>
                                <span class="menu-title">Email</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="mailbox.html">Inbox</a></li>
                                <li><a href="mailbox-message.html">View Message</a></li>
                                <li><a href="mailbox-compose.html">Compose Message</a></li>
                                <li><a href="mailbox-templates.html">Email Templates<span
                                            class="label label-info pull-right">New</span></a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-file-html"></i>
                                <span class="menu-title">Pages</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="pages-blank.html">Blank Page</a></li>
                                <li><a href="pages-profile.html">Profile</a></li>
                                <li><a href="pages-search-results.html">Search Results</a></li>
                                <li><a href="pages-faq.html">FAQ</a></li>
                                <li class="list-divider"></li>
                                <li><a href="pages-404.html">404 Error</a></li>
                                <li><a href="pages-500.html">500 Error</a></li>
                                <li class="list-divider"></li>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-password-reminder.html">Password Reminder</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>

                            </ul>
                        </li>


                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-tactic"></i>
                                <span class="menu-title">Menu Level</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li class="list-divider"></li>
                                <li>
                                    <a href="#">Third Level<i class="arrow"></i></a>

                                    <!--Submenu-->
                                    <ul class="collapse" aria-expanded="false">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Third Level<i class="arrow"></i></a>

                                    <!--Submenu-->
                                    <ul class="collapse" aria-expanded="false">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li class="list-divider"></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="list-divider"></li>

                        <!--Category name-->
                        <li class="list-header">Extras</li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-happy"></i>
                                <span class="menu-title">Icons Pack</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                <li><a href="icons-themify.html">Themify</a></li>
                                <li><a href="icons-font-awesome.html">Font Awesome</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-medal-2"></i>
                                <span class="menu-title">
                                    PREMIUM ICONS
                                    <span class="label label-danger pull-right">BEST</span>
                                </span>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false">
                                <li><a href="premium-line-icons.html">Line Icons Pack</a></li>
                                <li><a href="premium-solid-icons.html">Solid Icons Pack</a></li>

                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="helper-classes.html">
                                <i class="demo-psi-inbox-full"></i>
                                <span class="menu-title">Helper Classes</span>
                            </a>
                        </li>
                    </ul>


                    <!--Widget-->
                    <!--================================-->
                    <div class="mainnav-widget">

                        <!-- Show the button on collapsed navigation -->
                        <div class="show-small">
                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                <i class="demo-pli-monitor-2"></i>
                            </a>
                        </div>

                        <!-- Hide the content on collapsed navigation -->
                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                            <ul class="list-group">
                                <li class="list-header pad-no pad-ver">Server Status</li>
                                <li class="mar-btm">
                                    <span class="label label-primary pull-right">15%</span>
                                    <p>CPU Usage</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                            <span class="sr-only">15%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="mar-btm">
                                    <span class="label label-purple pull-right">75%</span>
                                    <p>Bandwidth</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                            <span class="sr-only">75%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View
                                        Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End widget-->

                </div>
                <div class="nano-pane" style="display: none;">
                    <div class="nano-slider" style="height: 1510px; transform: translate(0px, 0px);"></div>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
