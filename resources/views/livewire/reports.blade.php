<div>

    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">Our Reports </h2>

                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
    </section>
    <!--//breadcrumb-->
    <!--/Elements-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <section class="bootstrap-components page-blogw3 py-5">
        <div class="container pt-lg-4 pb-lg-5">

            <!-- Outline buttons -->
            <div class="components mt-5">
                <h3 class="inner-heading mb-3">Reports</h3>
                <div class="components-info">

                    <div class="card-deck">
                        <div class="row">
                            @forelse($reports as $report)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $report->title }}</h4>
                                        <h6>{{ $report->created_at->toFormattedDateString() }}</h6>
                                        <p class="card-text">
                                            {{ $report->description }}
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <a href="{{ 'uploads/data/'. $report->file }}" class="btn btn-success btn-sm mb-2" download>Download</a>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
                {{ $reports->links('pagination') }}
            </div>
        </div>
</div>
</div>
</section>
<!--//Elements-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>


</div>