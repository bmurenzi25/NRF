<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Add & View Events</h4>
                        <span>Use the form below to add new event</span>
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
                    <h5>Add new Event</h5>
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
                    <form wire:submit.prevent="saveEvent" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="title" class="form-control form-control-lg" placeholder="Event title">
                                @error('title') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        @if($editMode)
                        <img src="{{ asset('uploads/data/'. $photo) }}" width="50%" style="margin:0 0 10px 200px;" alt="">

                        @elseif($photo)
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
                            <label class="col-sm-2 col-form-label">Event Status</label>
                            <div class="col-sm-10">
                                <select name="select" wire:model="status" class="form-control">
                                    <option value="">Event Status selection</option>
                                    <option value="coming soon">Coming Soon</option>
                                    <option value="suspended">Suspended</option>
                                    <option value="ended">Ended</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Event Description</label>
                            <div class="col-sm-10">
                                <textarea rows="8" cols="5" id="main_content" wire:model="description" class="form-control" placeholder="Event description"></textarea>
                                @error('description') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            @if(!$editMode)
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save Event</button>
                            </div>
                            @else
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-success btn-lg">Edit Event</button>
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
                    <h5>Events</h5>
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($events as $event)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $event->photo }}" alt="">
                                    </th>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->status }}</td>
                                    <td>
                                        <span>
                                            <button wire:click="loadEventInfoToForm({{ $event }})" class="btn btn-sm btn-round btn-outline-success">Edit</button>
                                            <button wire:click="deleteEvent({{ $event }})" class="btn btn-sm btn-round btn-outline-danger">Delete</button>
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
