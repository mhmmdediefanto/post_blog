<div class="row align-items-center bg-dark px-lg-5">
    <div class="col-lg-9">
        <nav class="navbar navbar-expand-sm bg-dark p-0">
            <ul class="navbar-nav ml-n2">
                <li class="nav-item border-right border-secondary">
                    <a class="nav-link text-body small" href="#">Advertise</a>
                </li>
                <li class="nav-item border-right border-secondary">
                    <a class="nav-link text-body small" href="#">Contact</a>
                </li>
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <li class="nav-item">
                            <button class="nav-link text-body small" type="submit">Logout</button>
                        </li>
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-body small" href="/login">Login</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    <div class="col-lg-3 text-right d-none d-md-block">
        <nav class="navbar navbar-expand-sm bg-dark p-0">
            <ul class="navbar-nav ml-auto mr-n2">
                <li class="nav-item">
                    <a class="nav-link text-body" href="https://github.com/mhmmdediefanto"><small class="fab fa-twitter"></small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="https://www.facebook.com/edi.efanto.3/"><small class="fab fa-facebook-f"></small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="https://id.linkedin.com/in/edi-efanto-ba994b276"><small class="fab fa-linkedin-in"></small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="https://www.instagram.com/mhmmdedfan/"><small class="fab fa-instagram"></small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-body" href="https://youtube.com/@muhammadediefanto365"><small class="fab fa-youtube"></small></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="row align-items-center bg-white py-3 px-lg-5">
    <div class="col-lg-4">
        <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
            <h1 class="m-0 display-4 text-uppercase text-primary">Second<span
                    class="text-secondary font-weight-normal">News</span></h1>
        </a>
    </div>
    <div class="col-lg-8 text-center text-lg-right">
        <a href="https://htmlcodex.com"><img class="img-fluid" src="img/ads-728x90.png" alt=""></a>
    </div>
</div>
