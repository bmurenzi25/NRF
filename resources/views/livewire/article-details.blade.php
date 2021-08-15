<div>
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">{{ $article->title }}</h2>

                    </div>

                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
    </section>
    <!--//breadcrumb-->
    <!--/Blog-Section-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <!--/w3l-blog-->
    <section class="w3l-blog bloghny-page">
        <div class="blog py-5" id="blogpage">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-8 bloghnypage-left blog-single-post">
                        <div class="single-post-image mb-4">
                            <img src="{{ asset('uploads/data/'. $article->image) }}" class="img-fluid w-100 radius-image" alt="blog-post-image">
                        </div>
                        <div class="blo-singl mb-5">
                            <ul class="blog-single-author-date d-sm-flex align-items-center">
                                <li>
                                    <p><span class="fas fa-clock"></span> {{ $article->created_at->toDateString() }}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="single-post-content">
                            <h3 class="post-content-title mb-3">{{ $article->title }}
                            </h3>

                            <p class="mb-4">
                                {!! $article->content !!}
                            </p>
                        </div>

                        
                        <ul class="share-post mb-5 text-right">
                            <li class="facebook">
                                <a href="{{ $fb_link }}" title="Facebook" target="_blank" wire:click="shareFacebook()">
                                    <span class="fab fa-facebook-f" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="#link" title="Twitter">
                                    <span class="fab fa-twitter" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="google">
                                <a href="#link" title="whatsapp">
                                    <span class="fab fa-whatsapp" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/sidebar-->
                    <div class="col-lg-4 blog-w3hny-right pl-lg-5">
                        <aside class="sidebar">
                            <!-- Popular Post Widget-->
                            <div class="sidebar-widget popular-posts mb-5">
                                <div class="sidebar-title mb-4">
                                    <h4>Recent articles</h4>
                                </div>
                                @forelse($recents as $recent)
                                    <article class="post">
                                        <figure class="post-thumb"><img src="{{ asset('uploads/data/'. $recent->image) }}" class="radius-image img-fluid" alt="">
                                        </figure>
                                        <div class="text"><a href="/articles/{{ $recent->slug }}">{{ $recent->title }}</a>
                                        </div>
                                        <div class="post-info">{{ $recent->created_at->toDateString() }}</div>
                                    </article>
                                @empty
                                @endforelse
                            </div>
                        </aside>
                    </div>
                    <!--//sidebar-->
                </div>

            </div>
        </div>
    </section>
    <!--//w3l-blog-->


</div>

<!--//w3l-news-->
<!--//Blog-Section-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>


</div>

