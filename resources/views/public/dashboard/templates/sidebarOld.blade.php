<nav class="cd-side-nav js-cd-side-nav">
    <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Main</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview {{ Request::is('dashboard') ? 'cd-side__item--selected' : '' }} js-cd-item--has-children">
            <a href="/dashboard" class=""><span class="material-symbols-outlined fs-6 me-2">
                    dashboard
                </span><span>Dashboard</span>
            </a>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications {{ Request::is('dashboard/post*') ? 'cd-side__item--selected' : '' }} js-cd-item--has-children">
            <a href="/dashboard/post"><span class="material-symbols-outlined fs-6 me-2">
                    post
                </span><span>My Post</span></a>
        </li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications js-cd-item--has-children">
            <a href="#0"> <i class="bi bi-bell-fill me-2"></i>Notifications<span class="cd-count">3</span></a>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
            <a href="#0"><span class="material-symbols-outlined me-2 fs-6">
                    comment
                </span>Comments</a>

            <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="#0">All Comments</a></li>
                <li class="cd-side__sub-item"><a href="#0">Edit Comment</a></li>
                <li class="cd-side__sub-item"><a href="#0">Delete Comment</a></li>
            </ul>
        </li>
    </ul>

    @can('admin')
    <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Administrator</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications {{ Request::is('dashboard/category') ? 'cd-side__item--selected' : '' }} js-cd-item--has-children">
            <a href="/dashboard/category"><span class="material-symbols-outlined fs-6 me-2">
                    category
                </span><span>Category</span></a>
        </li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
            <a href="#0"><span class="material-symbols-outlined me-2 fs-6">
                    book
                </span>Bookmarks</a>

            <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="#0">All Bookmarks</a></li>
                <li class="cd-side__sub-item"><a href="#0">Edit Bookmark</a></li>
                <li class="cd-side__sub-item"><a href="#0">Import Bookmark</a></li>
            </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">
            <a href="#0"><span class="material-symbols-outlined fs-6 me-2">
                    image
                </span>Images</a>

            <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="#0">All Images</a></li>
                <li class="cd-side__sub-item"><a href="#0">Edit Image</a></li>
            </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
            <a href="/dashboard/user"><span class="material-symbols-outlined fs-6 me-2">
                    person
                </span>Users</a>

            <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="/dashboard/user">All Users</a></li>
                <li class="cd-side__sub-item"><a href="/dashboard/user/create">Add User</a></li>
            </ul>
        </li>
    </ul>
    @endcan

    <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Action</span></li>
        <li class="cd-side__btn"><button class="reset" href="#0">+ Button</button></li>
    </ul>
</nav>


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Earnings (Monthly)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Earnings (Annual)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pending Requests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
