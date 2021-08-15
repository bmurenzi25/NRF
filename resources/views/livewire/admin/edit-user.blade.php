<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Edit Your Profile</h4>
                        <span>Use the form below</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card" style="padding: 20px;">
                <div class="card-header">
                    <h5>Edit Account Details</h5>
                    <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>

                </div>
                <div class="card-block">
                    @if(session()->has('message'))
                    <div class="alert alert-primary text-center" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    @if(session()->has('failed'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <form wire:submit.prevent="editUser" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="name" class="form-control form-control-lg" placeholder="Name">
                                @error('name') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email *</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="email" class="form-control form-control-lg" placeholder="Email">
                                @error('email') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Current Password *</label>
                            <div class="col-sm-10">
                                <input type="password" wire:model="current_password" class="form-control form-control-lg">
                                @error('current_password') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password *</label>
                            <div class="col-sm-10">
                                <input type="password" wire:model="password" class="form-control form-control-lg">
                                @error('password') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password *</label>
                            <div class="col-sm-10">
                                <input type="password" wire:model="password_confirmation" class="form-control form-control-lg">
                                @error('password_confirmation') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        @if($photo)
                        <img src="{{ $photo->temporaryUrl() ?? '' }}" width="50%" style="margin:0 0 10px 200px;" alt="">
                        @endif
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload Photo *</label>
                            <div class="col-sm-10">
                                <input type="file" wire:model="photo" class="form-control form-control form-control-lg">
                                @error('photo') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            @if($editMode)
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-success btn-lg">Update Information</button>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>