<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/category/sports') }}">Các môn thể thao</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/category/music') }}">Âm nhạc</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/category/food') }}">Đồ ăn</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/category/general') }}">Tổng quan</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{ url('/search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="query">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm</button>
            </form>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Đăng ký</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Đăng xuất</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
