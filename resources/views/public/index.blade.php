@extends('public.layouts.main')

@section('slideStart')
    @foreach ($sliders as $item)
        <div class="position-relative overflow-hidden" style="height: 500px;">
            <img class="img-fluid h-100" src="{{ asset('storage/' . $item->image) }}" style="object-fit: cover;">
            <div class="overlay">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                        href="/post/category/{{ $item->category->slug }}">{{ $item->category->name }}</a>
                    <a class="text-white" href="">{{ $item->created_at->diffForHumans() }}</a>
                </div>
                <a class="h2 m-0 text-white text-uppercase font-weight-bold"
                    href="/post/{{ $item->slug }}">{{ $item->title }}</a>
            </div>
        </div>
    @endforeach
@endsection
@section('slideEnd')
    @foreach ($slideEnd as $items)
        <div class="col-md-6 px-0">
            <div class="position-relative overflow-hidden" style="height: 250px;">
                <img class="img-fluid w-100 h-100" src="{{ asset('storage/' . $items->image) }}" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="/post/category/{{ $items->category->slug }}">{{ $items->category->name }}</a>
                        <a class="text-white" href=""><small>{{ $items->created_at->diffForHumans() }}</small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                        href="/post/{{ $items->slug }}">{{ $items->title }}</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('breakingNewsStart')
    <div class="col-12">
        <div class="d-flex justify-content-between">
            <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">
                SECONDS News</div>
            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                style="width: calc(100% - 170px); padding-right: 90px;">
                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Dengan
                        membaca berita kamu akan mendapat pengetahuan dan juga informasi terbaru seperti perkembangan di
                        dunia bisnis, kebijakan-kebijakan baru yang diterapkan di Jakarta (aturan plat ganjil/genap
                        kendaraan bermotor misalnya), atau informasi mengenai berbagai pertandingan olahraga, yang akan
                        berguna nantinya.</a></div>
                <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">
                        Sukses adalah menyukai diri kita sendiri, menyukai apa yang kita kerjakan, dan menyukai bagaimana
                        kita melakukannya - Maya Angelou.
                    </a></div>
            </div>
        </div>
    </div>
@endsection
@section('featuredNewsStart')
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            @foreach ($featured as $features)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset('storage/' . $features->image) }}"
                        style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/post/category/{{ $features->category->slug }}">{{ $features->category->name }}</a>
                            <a class="text-white"
                                href=""><small>{{ $features->created_at->diffForHumans() }}</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                            href="/post/{{ $features->slug }}">{{ $features->title }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('newsWithSidebar')
    <div class="col-12">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View
                All</a>
        </div>
    </div>
    @if ($featured->count())
        <div class="col-lg-6">
            <div class="position-relative mb-3">
                <img class="img-fluid w-100" src="{{ asset('storage/' . $featured[0]->image) }}"
                    style="object-fit: cover;">
                <div class="bg-white border border-top-0 p-4 overflow-hidden" style="height: 300px">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="/post/category/{{ $featured[0]->category->slug }}">{{ $featured[0]->category->name }}</a>
                        <a class="text-body"
                            href=""><small>{{ $featured[0]->created_at->diffForHumans() }}</small></a>
                    </div>
                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                        href="/post/{{ $featured[0]->slug }}">
                        {{ $featured[0]->title }}</a>
                    <p class="m-0">{{ $featured[0]->excerpt }}</p>
                </div>
                <div class="d-flex justify-content-between bg-white border border-top-0 px-4 py-2">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle mr-2" src="{{ asset('storage/' . $featured[0]->user->profilImage) }}"
                            width="35" height="35" alt="">
                        <small>{{ $featured[0]->user->name }}</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <small class="ml-3"><a href=""><i
                                    class="far fa-eye mr-2"></i>{{ $featured[0]->views->count() }}</a></small>
                        <small class="ml-3"><a href="/post/{{ $featured[0]->slug }}"><i
                                    class="far fa-comment mr-2"></i>{{ $featured[0]->comments_count }}</a></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="position-relative mb-3">
                <img class="img-fluid w-100" src="{{ 'storage/' . $featured[1]->image }}" style="object-fit: cover;">
                <div class="bg-white border border-top-0 p-4 overflow-hidden" style="height: 300px">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="/post/category/{{ $featured[1]->category->slug }}">{{ $featured[1]->category->name }}</a>
                        <a class="text-body"
                            href=""><small>{{ $featured[1]->created_at->diffForHumans() }}</small></a>
                    </div>
                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                        href="/post/{{ $featured[1]->slug }}">
                        {{ $featured[1]->title }}</a>
                    <p class="m-0">{{ $featured[1]->excerpt }}</p>
                </div>
                <div class="d-flex justify-content-between bg-white border border-top-0 px-4 py-2">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle mr-2" src="{{ asset('storage/' . $featured[1]->user->profilImage) }}"
                            width="35" height="35" alt="">
                        <small>{{ $featured[1]->user->name }}</small>
                    </div>
                    <div class="d-flex align-items-center">
                        <small class="ml-3"><a href=""><i
                                    class="far fa-eye mr-2"></i>{{ $featured[1]->views->count() }}</a></small>
                        <small class="ml-3"><a href="/post/{{ $featured[1]->slug }}"><i
                                    class="far fa-comment mr-2"></i>{{ $featured[1]->comments_count }}</a></small>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('cardNewsSidebar')
        @foreach ($featured->skip(2) as $featur)
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3 bg-white" style="height: 110px;">
                    <img class="img-fluid" src="{{ 'storage/' . $featur->image }}" alt=""
                        style="object-fit: cover;width:80px;height:100%">
                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                href="/post/category/{{ $featur->category->slug }}">{{ $featur->category->name }}</a>
                            <a class="text-body" href=""><small> {{ $featur->created_at->diffForHumans() }}
                                </small></a>
                        </div>
                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="/post/{{ $featur->slug }}"
                            style="max-width: 100%; overflow:hidden">
                            {{ $featur->title }}</a>
                    </div>
                </div>

            </div>
        @endforeach
        {{ $featured->links() }}
    @endif
@endsection
@section('socialMedia')
    <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                <i class="fab fa-facebook-f text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Fans</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                <i class="fab fa-linkedin-in text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Connects</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Subscribers</span>
            </a>
            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
        </div>
    </div>
@endsection

@section('popularNews')
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
    </div>
    <div class="bg-white overflow-hidden border border-top-0 p-3">
        @foreach ($tradingnews as $trading)
            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                <img class="img-fluid" src="{{ asset('storage/' . $trading->image) }}" alt=""
                    style="object-fit: cover;width:80px;height:100%">
                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                            href="/post/category/{{ $trading->category->slug }}">{{ $trading->category->name }}</a>
                        <a class="text-body" href=""><small>{{ $trading->created_at->diffForHumans() }}</small></a>
                    </div>
                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                        href="/post/{{ $trading->slug }}">{{ $trading->title }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('tagsStart')
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        <div class="d-flex flex-wrap m-n1">
            @foreach ($categories as $category)
                <a href="" class="btn btn-sm btn-outline-secondary m-1">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
@endsection
