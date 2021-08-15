<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Add & View Site Settings</h4>
                        <span>Use the edit button to update setting Information</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="row">
        <div class="col-sm-12">
            @if(session()->has('message'))
            <div class="alert alert-primary text-center" role="alert">
                {{ session('message') }}
            </div>
            @endif
            @if($editMode)
            <!-- Basic Form Inputs card start -->
            <div class="card" style="padding: 20px;">
                <div class="card-header">
                    <h5>Edit setting</h5>
                    <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                    <div class="card-header-right">
                        <i class="icofont icofont-spinner-alt-5"></i>
                    </div>

                </div>
                <div class="card-block">

                    <form wire:submit.prevent="editSetting" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="name" class="form-control form-control-lg" placeholder="Setting name" disabled="{{ $editMode }}">
                                @error('name') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Setting Value</label>
                            <div class="col-sm-10">
                                <textarea rows="8" cols="5" wire:model="value" class="form-control" placeholder="setting description"></textarea>
                                @error('value') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-success btn-lg">Edit setting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h5>settings</h5>
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
                                    <th>Seting</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($settings as $setting)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $setting->photo }}" alt="">
                                    </th>
                                    <td>{{ $setting->name }}</td>
                                    <td>{{ Str::limit($setting->value, 120) }}</td>
                                    <td>
                                        <span>
                                            <button wire:click="loadSettingInfoToForm({{ $setting }})" class="btn btn-sm btn-round btn-outline-success">Edit Information</button>
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