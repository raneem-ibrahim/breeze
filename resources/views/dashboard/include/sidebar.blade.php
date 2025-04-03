<section id="sidebar">
    <a href="#" class="brand">
         <!-- <img  src="img/لوجو2.png" width="70px" height="70px"> -->
        <span class="text"><img src="{{asset('image/namelogo.png')}}" width="100px" height="100px">
    </a></span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{url('dashboard')}}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">My Store</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Message</span>
            </a>
        </li>
        <li>
            <a href="{{url('student')}}">
                <i class='bx bxs-group' ></i>
                <span class="text">الطلاب</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
             {{-- <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>  --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
<responsive-nav-link class='bx bxs-log-out-circle'  style="color:#DB504A; :href="route('logout')" onclick="event.preventDefault();   this.closest('form').submit();">

 {{ __('Log Out') }}

</responsive-nav-link>
            </form>
        </li>
    </ul>
</section>