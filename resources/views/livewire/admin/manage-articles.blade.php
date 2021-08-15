<div>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icofont icofont-file-code bg-c-blue"></i>
                    <div class="d-inline">
                        <h4>Add & View Articles</h4>
                        <span>Use the form below to add new article</span>
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
                    <h5>Add new Article</h5>
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
                    <form wire:submit.prevent="saveArticle" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title*</label>
                            <div class="col-sm-10">
                                <input type="text" wire:model="title" class="form-control form-control-round form-control-lg" placeholder="Article title">
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
                        <div class="form-group row" wire:ignore>
                            <label class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10" wire:ignore>
                                <textarea id="content" wire:model="content" name="content">{{ $content }}</textarea>
                                @error('content') <span style="font-weight: bold; color:red;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            @if(!$editMode)
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save Article</button>
                            </div>
                            @else
                            <div style="padding: 30px;">
                                <button type="submit" class="btn btn-outline-success btn-lg">Edit Article</button>
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
                    <h5>Articles</h5>
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
                                @forelse($articles as $article)
                                <tr>
                                    <th scope="row">
                                    <img src="{{ asset('uploads/data/'.$article->image) }}" alt="" width="50">
                                    </th>
                                    <td>{{ $article->title }}</td>
                                    <td>
                                        <span>
                                            <button wire:click="loadArticleInfoToForm({{ $article->id }})" class="btn btn-sm btn-round btn-outline-success">Edit</button>
                                            <button wire:click="deleteArticle({{ $article->id }})" class="btn btn-sm btn-round btn-outline-danger">Delete</button>
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
<script>
    $('#content').summernote({
        height: 250,
        codemirror: {
            theme: 'monokai'
        },
        callbacks: {
            onChange: function(contents, $editable) {
                @this.set('content', contents);
            }
        }
    });
</script>