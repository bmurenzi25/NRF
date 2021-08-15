<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Add & View Projects</h4>
                        <span>Use the form below to add new project</span>
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
                    <h5>Add new Project</h5>
                    <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>

                </div>
                <div class="card-block">
                    <form wire:submit.prevent="saveProject" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="title" class="form-control form-control-round form-control-lg" placeholder="Enter project title">
                                @error('title') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        @if($photo)
                            <img src="{{ $photo->temporaryUrl() ?? '' }}" width="50%" style="margin:0 0 10px 200px;" alt="">
                            @endif
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload Photo</label>

                           

                            <div class="col-sm-10">
                                <input type="file" wire:model="photo" class="form-control form-control form-control-lg">
                                @error('photo') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea rows="5" cols="5" wire:model="content" class="form-control" placeholder="Article Content"></textarea>
                                @error('title') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-primary btn-lg">Save Project</button>
                            </div>
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
                    <h5>Projects</h5>
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
                    <div class="table-responsive" style="padding: 25px;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark dhjsdhfsafjksafjkasfasjkfasjkfhasjkf</td>
                                    <td>Otto</td>
                                    <td>
                                        <span>
                                            <button class="btn btn-sm btn-round btn-success">Edit</button>
                                            <button class="btn btn-sm btn-round btn-danger">Delete</button>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark dhjsdhfsafjksafjkasfasjkfasjkfhasjkf</td>
                                    <td>Otto</td>
                                    <td>
                                        <span>
                                            <button class="btn btn-sm btn-round btn-success">Edit</button>
                                            <button class="btn btn-sm btn-round btn-danger">Delete</button>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>