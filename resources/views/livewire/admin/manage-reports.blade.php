<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Add & View Reports</h4>
                        <span>Use the form below to add new report</span>
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
                    <h5>Add new report</h5>
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
                    <form wire:submit.prevent="saveReport" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="title" class="form-control form-control-round form-control-lg" placeholder="report title">
                                @error('title') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Upload report document</label>
                            <div class="col-sm-10">
                                <input type="file" wire:model="file" class="form-control form-control form-control-lg">
                                @error('file') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea rows="5" cols="5" wire:model="description" class="form-control" placeholder="report Content"></textarea>
                                @error('description') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            @if(!$editMode)
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save report</button>
                            </div>
                            @else
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-success btn-lg">Edit report</button>
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
                    <h5>Reports</h5>
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
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($reports as $report)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $report->image }}" alt="">
                                    </th>
                                    <td>{{ $report->title }}</td>
                                    <td>
                                        <span>
                                            <button wire:click="loadReportInfoToForm({{ $report }})" class="btn btn-sm btn-round btn-outline-success">Edit</button>
                                            <button wire:click="deleteReport({{ $report }})" class="btn btn-sm btn-round btn-outline-danger">Delete</button>
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