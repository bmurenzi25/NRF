<div>
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">About Us</h2>
                    </div>
                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
    </section>
    <!--//breadcrumb-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <!--/w3l-aboutblock1-->
    <section class="w3l-aboutblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-12 mt-lg-0 mt-5 about-right-faq align-self">
                        <h5 class="title-subw3hny mb-1">About Us</h5>
                        <h3 class="title-w3l">Life doesn’t get easier or more forgiving, we get stronger and more resilient.</h3>
                        <p class="mt-4">
                            {{ $about[0] }}
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//w3l-aboutblock1-->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!--/team-sec-->
    <section class="w3l-team-main team py-5" id="team">
        <div class="container py-lg-5">
            <h5 class="title-subw3hny mb-1 text-center">Our Team</h5>
            <h3 class="title-w3l text-center">Technical Team</h3>
            <div class="row team-row mt-md-5 mt-4">

                @forelse($members as $member)
                @if($member->category == 'technical team')
                <div class="col-lg-3 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="{{ asset('uploads/data/'. $member->photo) }}" alt="" class="radius-image">

                        </div>
                        <a href="#url" class="team-title">{{ $member->name }}</a>
                        <p>{{ $member->role }}</p>
                    </div>
                </div>
                @endif
                @empty
                
                @endforelse

            </div>
        </div>
        <div class="container py-lg-5">
            <h3 class="title-w3l text-center">Members</h3>
            <div class="row team-row mt-md-5 mt-4">
            @forelse($members as $member)
                @if($member->category == 'member')
                <div class="col-lg-2 col-6 team-wrap">
                    <div class="team-member text-center">
                        <div class="team-img">
                            <img src="{{ asset('uploads/data/'. $member->photo) }}" alt="" class="radius-image">
                        </div>
                        <a href="#url" class="team-title">{{ $member->name }}</a>
                        <p>{{ $member->role }}</p>
                    </div>
                </div>
                @endif
                @empty
                
                @endforelse
            </div>
        </div>
    </section>
    <!--//team-sec-->

    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!--/w3l-about2-->

</div>