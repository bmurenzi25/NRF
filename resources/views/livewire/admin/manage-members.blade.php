<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Add & View members</h4>
                        <span>Use the form below to add new member</span>
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
                    <h5>Add new member</h5>
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
                    <form wire:submit.prevent="saveMember" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="name" class="form-control form-control-lg" placeholder="Name">
                                @error('name') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Position *</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="role" class="form-control form-control-lg" placeholder="Role">
                                @error('role') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Member Category</label>
                            <div class="col-sm-10">
                                <select name="select" wire:model="category" class="form-control">
                                    <option value="">Category selection</option>
                                    <option value="Technical Team">Techical Team</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>
                            @error('category') <span style="font-weight: bold; color:red;"> {{ $message }} </span> @enderror
                        </div>
                        @if($editMode)
                            <img src="{{ asset('uploads/data/'. $photo) }}" width="50%" style="margin:0 0 10px 200px;" alt="">
                        @endif
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
                            @if(!$editMode)
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save Member</button>
                            </div>
                            @else
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-success btn-lg">Edit Member</button>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>members</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    @if(session()->has('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('deleted') }}
                    </div>
                    @endif
                    <div class="table-responsive" style="padding: 25px;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($members as $member)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $member->image }}" alt="">
                                    </th>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->role }}</td>
                                    <td>{{ $member->category }}</td>
                                    <td>
                                        <span>
                                            <button wire:click="loadMemberInfoToForm({{ $member }})" class="btn btn-sm btn-round btn-outline-success">Edit</button>
                                            <button wire:click="deleteMember({{ $member }})" class="btn btn-sm btn-round btn-outline-danger">Delete</button>
                                        </span>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>