<div>
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">Our Articles</h2>

                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
    </section>
    <!--//breadcrumb-->
    <!--/Blog-Section-->
    <!--/w3l-blog-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <section class="w3l-blog bloghny-page">
        <div class="blog py-5" id="Newsblog">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-12 bloghnypage-left">
                        <div class="row">

                            @forelse($articles as $article)
                            <div class="col-md-4 item mt-md-0 mt-5 mb-2">
                                <div class="card">
                                    <div class="card-header p-0 position-relative">
                                        <a href="/articles/{{ $article->slug }}" class="zoom d-block">
                                            <img class="card-img-bottom d-block" src="{{ asset('uploads/data/'. $article->image) }}" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body blog-details">

                                        <a href="/articles/{{ $article->slug }}" class="blog-desc">{{ $article->title }} </a>
                                    </div>
                                    <div class="card-footer">
                                        <span class="meta-value">Posted: </span><a href="#author">{{ $article->created_at->diffForHumans() }}</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
                {{ $articles->links('pagination') }}
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