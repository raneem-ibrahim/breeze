<nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
        <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحات القيادة</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">RTL</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">RTL</h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group input-group-outline">
          <label class="form-label">أكتب هنا...</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <ul class="navbar-nav d-flex align-items-center me-auto ms-0 justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <a class="btn btn-outline-primary btn-sm mb-0 ms-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">منشئ مضمنة</a>
        </li>
        <li class="mt-1">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
        </li>
        <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="material-symbols-rounded fixed-plugin-button-nav">settings</i>
          </a>
        </li>



        @php
        use App\Models\Contact;
        $messages = Contact::where('is_read', false)->latest()->take(5)->get();
        $unreadCount = Contact::where('is_read', false)->count();
    @endphp
    
    <li class="nav-item dropdown ps-2 d-flex align-items-center">
      <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="material-symbols-rounded">notifications</i>
        @if($unreadCount > 0)
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success">
            {{ $unreadCount }}
          </span>
        @endif
      </a>
    
      <ul class="dropdown-menu px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
        @forelse($messages as $msg)
          <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="{{ route('contact.show', $msg->id) }}">

              <div class="d-flex py-1">
                <div class="my-auto">
                  <div class="avatar avatar-sm bg-gradient-success ms-3 d-flex align-items-center justify-content-center">
                    <i class="material-icons text-white">email</i>
                  </div>
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    <span class="font-weight-bold">رسالة جديدة</span> من {{ $msg->full_name }}
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    {{ $msg->created_at->diffForHumans() }}
                  </p>
                </div>
              </div>
            </a>
          </li>
        @empty
          <li class="text-center text-secondary">لا توجد رسائل جديدة</li>
        @endforelse
    
        <!-- الرسائل الأخرى الثابتة لو حابة تتركيها -->
        <li class="mb-2">
          <a class="dropdown-item border-radius-md" href="javascript:;">
            <div class="d-flex py-1">
              <div class="my-auto">
                <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark ms-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="text-sm font-weight-normal mb-1">
                  <span class="font-weight-bold">New album</span> by Travis Scott
                </h6>
                <p class="text-xs text-secondary mb-0">
                  <i class="fa fa-clock me-1"></i>
                  1 day
                </p>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </li>
    







        <li class="nav-item d-flex align-items-center">
          <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
            <i class="material-symbols-rounded">account_circle</i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>