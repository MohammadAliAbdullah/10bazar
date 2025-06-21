@extends('Frontend.Layout.master')

@section('content')
    <!-- Breadcrumb Start -->
    @include('Frontend.components.breadcrumb', ['page' => 'Blog', 'subPage' => 'Blog'])
    <!-- Breadcrumb End -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="block">
                    <div class="posts-view">
                        <div class="posts-view__list posts-list posts-list--layout--grid2">
                            <div class="posts-list__body">
                                @foreach ($blogs as $blog)
                                    <div class="posts-list__item">
                                        <div class="post-card post-card--layout--grid post-card--size--nl">
                                            <div class="post-card__image">
                                                <a href="{{ url('blogs/' . $blog->slug) }}">
                                                    <img src="{{ asset('public/images/blogs/' . $blog->images) }}"
                                                        alt="{{ $blog->title }}">
                                                </a>
                                            </div>
                                            <div class="post-card__info">
                                                <div class="post-card__category">
                                                    {{-- If you have a category, show it. Otherwise, you can leave this empty or use a placeholder --}}
                                                    <a href="#">Blog</a>
                                                </div>
                                                <div class="post-card__name">
                                                    <a href="{{ url('blogs/' . $blog->slug) }}">{{ $blog->title }}</a>
                                                </div>
                                                <div class="post-card__date">
                                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
                                                </div>
                                                <div class="post-card__content">
                                                    {!! Str::limit(strip_tags($blog->content), 100, '...') !!}
                                                </div>
                                                <div class="post-card__read-more">
                                                    <a href="{{ url('blogs/' . $blog->slug) }}"
                                                        class="btn btn-secondary btn-sm">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="posts-view__pagination">
                            <ul class="pagination justify-content-center">
                                {{ $blogs->render() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block block-sidebar block-sidebar--position--end">
                    {{-- <div class="block-sidebar__item">
                        <div class="widget-search">
                            <form class="widget-search__body"><input class="widget-search__input"
                                    placeholder="Blog search..." type="text" autocomplete="off" spellcheck="false">
                                <button class="widget-search__button" type="submit"><svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg></button>
                            </form>
                        </div>
                    </div> --}}
                    <div class="block-sidebar__item">
                        <div class="widget-aboutus widget">
                            <h4 class="widget__title">About Blog</h4>
                            <div class="widget-aboutus__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget
                                viverra nulla sem vitae neque. Quisque id sodales libero.</div>
                            <div class="widget-aboutus__socials">
                                <ul>
                                    <li><a class="widget-aboutus__link widget-aboutus__link--rss"
                                            href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="widget-social__icon fas fa-rss"></i></a></li>
                                    <li><a class="widget-aboutus__link widget-aboutus__link--youtube"
                                            href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="widget-aboutus__icon fab fa-youtube"></i></a></li>
                                    <li><a class="widget-aboutus__link widget-aboutus__link--facebook"
                                            href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="widget-aboutus__icon fab fa-facebook-f"></i></a></li>
                                    <li><a class="widget-aboutus__link widget-aboutus__link--twitter"
                                            href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="widget-aboutus__icon fab fa-twitter"></i></a></li>
                                    <li><a class="widget-aboutus__link widget-aboutus__link--instagram"
                                            href="https://themeforest.net/user/kos9" target="_blank"><i
                                                class="widget-aboutus__icon fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block-sidebar__item">
                        <div class="widget-posts widget">
                            <h4 class="widget__title">Latest Posts</h4>
                            <div class="widget-posts__list">
                                @foreach ($recents as $recent)
                                    <div class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="{{ url('blogs/' . $recent->slug) }}">
                                                <img src="{{ asset('public/images/blogs/' . $recent->images) }}"
                                                    alt="{{ $recent->title }}">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="{{ url('blogs/' . $recent->slug) }}">
                                                    {{ Str::limit($recent->title, 50) }}
                                                </a>
                                            </div>
                                            <div class="widget-posts__date">
                                                {{ \Carbon\Carbon::parse($recent->created_at)->format('F d, Y') }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
