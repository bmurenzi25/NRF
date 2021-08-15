<div>
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">Our events </h2>

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
                <h3 class="inner-heading mb-3">Events</h3>
                <div class="components-info">
                    <div class="card-deck">
                        <div class="row">
                            @forelse($events as $event)
                            <div class="col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('uploads/data/'. $event->photo) }}" class="card-img-top img-fluid" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->title }}</h5>
                                        <p class="card-text">
                                            {{ $event->description }}
                                        </p>
                                        <!-- Button trigger modal -->
                                        <button type="button" wire:click="setModal({{ $event }})" class="btn btn-sm btn-primary">
                                            More info
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">
                                                            {{ $title }}
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $content }}

                                                        <h4 class="mt-2" style="color:red">Event Status: </h4> <b>{{ $status }}</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
                {{ $events->links('pagination') }}
            </div>
        </div>
</div>
</section>
<!--//Elements-->
<div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    window.addEventListener('openModal', event => {
        // console.log('click');
        $('#exampleModalCenter').modal('show');
    });
</script>