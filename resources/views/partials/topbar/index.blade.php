
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('home') }}" class="logo logo-light" height="67px" width="100px";>
                    <span class="logo-sm">
                        <img src="assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="67px" width="100px";>
                    </span>
                </a>
            </div>
            <!-- LOGO -->
{{--            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">--}}
{{--                <i class="fa fa-fw fa-bars"></i>--}}
{{--            </button>--}}
        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            {{--<div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge badge-danger badge-pill" id="countNotifications">{{ auth()->user()->unreadNotifications->count() }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px; overflow-y: scroll;" id="unreadNotifications">
                        @foreach(auth()->user()->unreadNotifications as $read)
                            <a href="{{ route('order.details', $read->id) }}" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1" key="t-your-order">You have a new order</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0">
                                                <i class="mdi mdi-clock-outline"></i>
                                                <span key="t-min-ago">{{$read->created_at->diffForHumans()}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> <span key="t-view-more">View More..</span>
                        </a>
                    </div>
                </div>
            </div>--}}

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--                    <img class="rounded-circle header-profile-user" src="{{asset('frontend/img/profile/'--}}
{{--                    .$customerData->image??'')}}"--}}
{{--                         alt="Header Avatar" onerror="this.src='http://ssl.gstatic.com/accounts/ui/avatar_2x.png'">--}}
{{--                    <span class="d-none d-xl-inline-block ml-1" key="t-henry">{{ auth()->user()->name }}</span>--}}
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('profile.index')}}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> <span key="t-profile">Profile</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="bx bx-power-off
                    font-size-16
                    align-middle
                     mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div>

        </div>
    </div>
</header>
<script>
    // setInterval(function(){
        notifications()
    // }, 5000);
    function notifications(){
        $.getJSON("{{ route('admin_notification') }}", function( data ) {
            $("#unreadNotifications").html('');
            let newNotifications = ""
            $.each( data, function( key, val ) {
                newNotifications +=`<a href="order-details/${val.id}" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1" key="t-your-order">You have a new order</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0">
                                                <i class="mdi mdi-clock-outline"></i>
                                                <span key="t-min-ago">${ msToTime(Date.now()-new Date(val.created_at)) } ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>`;
            });
            $("#unreadNotifications").html(newNotifications);
            $("#countNotifications").html(data.length);
        });
    }

    function msToTime(duration) {
        var milliseconds = parseInt((duration % 1000) / 100),
            seconds = Math.floor((duration / 1000) % 60),
            minutes = Math.floor((duration / (1000 * 60)) % 60),
            hours = Math.floor((duration / (1000 * 60 * 60)) % 24),
            days = Math.floor((duration / (1000 * 60 * 60 * 24)) % 365);

        let months = Math.floor((days) / 30);

        months = (months < 10) ? "0" + months : months;
        days = (days < 10) ? "0" + days : days;
        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        return months>0?months+" month ": (days>0?days+" days ":" " ) + (hours>0?hours+" Hours ":" " ) + (minutes>0?minutes+" Min ":" ") + (seconds>0?seconds+" Seconds ":" ");
    }
</script>
