<div class="nav">
    <div class="nav-mobile">
        <img src="{{url('assets/img/btn-burger.png')}}" alt="" class="nav-burger">
    </div>
    <div class="nav-group">
        <a href="{{route('home')}}" class="nav-item">
            <span class="nav-text"> Beranda </span>
            <span class="line"></span>
        </a>
        <a href="{{route('akademik')}}" class="nav-item" id="nav-akademik">
            <span class="nav-text">Akademik</span>
            <span class="line"></span>
        </a>
        <div class="dropdown nav-item" id="nav-new-feature">
            <button class="dropbtn">New Feature<img src="{{url('assets/img/drop-down.png')}}" /></button>
            <div class="dropdown-content">
                <a href="{{route('f.form.index')}}">Form</a>
                <a href="{{route('curhat.index')}}">Curhat - CHSI</a>
                <a href="{{route('kritik.index')}}">Kritik Saran</a>
                <a href="{{route('meditasi.index')}}">Meditasi</a>
            </div>
        </div>
    </div>

</div>
