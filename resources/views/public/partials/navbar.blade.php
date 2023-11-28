<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-uppercase text-primary">Second<span
                class="text-white font-weight-normal">News</span></h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="/category" class="nav-item nav-link {{ Request::is('category*') ? 'active' : '' }}">Category</a>
            <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <form action="/post" method="get">
            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" name="search" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
</nav>
