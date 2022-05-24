<header class="header mb-5">

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- this navbar logo-->
            <a href="/" class="navbar-brand home">
                <img src="{{asset('assets/img/logo/rmutt.png')}}" alt="" class="d-none d-md-inline-block" style="width:80;" />
                <img src="{{asset('assets/img/logo/rmutt.png')}}" alt="" class="d-inline-block d-md-none" style="width:80;" />
                <span class="sr-only">Cactus - go to homepage</span>
            </a>
            <!-- this navbar buttons-->
            <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i>
                </button>

            </div>
            <!-- this -->
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">หน้าหลัก</a>
                    </li>
                    <!-- product_dropdown -->
                    <li class="nav-item dropdown menu-large">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link" aria-expanded="true">บทความ
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-sm">
                                        <!-- <div class="col-md-6"> -->
                                        <h5>พันธุ์เมลอน</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item">
                                                <a href="{{ url('/article1') }}" class="nav-link">ไข่ทองคำ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('/article2') }}" class="nav-link">กรีนเนต</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('/article3') }}" class="nav-link">อินทนนท์ RZ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('/article4') }}" class="nav-link">ฮามิกัว</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- End-product_dropdown -->

                </ul>

            </div>
        </div>
    </nav>
</header>