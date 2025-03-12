@extends('layout.vedio')

@section('title')
Upload
@endsection


@section('main')

<main>
    <div class="container-fluid">
        <div class="nav section-tabs mb-4">
            <a class="nav-link active" data-target="div_file">{{ __('File Upload') }}</a>
            <a class="nav-link" data-target="div_url">{{ __('URL Upload') }}</a>
        </div>

        <div id="div_file" class="upload block">
            <div class="block-bg" style="background-image:url(./assets/bg4.png)">
                <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="dropfile" id="dropfile">
                        <div id="x1">
                            <div class="upload_slot">
                                <div id="divinputfile">
                                    <div class="upload-form position-relative">
                                        <div class="mb-3">
                                            <h3>{{ __('Drag files here') }}</h3>
                                            <div class="mb-4">{{ __('All video formats allowed. Max upload per file is 50GB') }}</div>
                                            <button type="button" class="btn btn-gradient submit-btn">{{ __('Browse files') }}</button>
                                            <input name="file" type="file" size="30" id="filepc" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;opacity: 0;cursor: pointer;" accept=".mp4, .mkv, .avi, .webm, .ts, .mpg, .mpeg, .vob, .flv, .wmv, .3gp, .mov" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-2">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">{{ __('Folder') }}</label>
                                </div>
                                <div class="col-auto flex-grow-1 flex-shrink-1">
                                    <select class="form-select" name="folder_id">
                                        <option value="0"> / </option>
                                        @foreach($folders as $folder)
                                            <option value="{{ $folder->id }}">{{ $folder->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ms-auto mb-2">
                            <input type="submit" name="submit_btn" value="{{ __('Upload Files') }}" class="btn btn-gradient submit-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <form action="{{ route('videos.store.url') }}" method="POST">
            @csrf
            <div id="div_url" class="block remote">
                <div class="block-bg">
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <b>{{ __('You can enter up to') }} 1 {{ __('URLs:') }}</b>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="text-muted">{{ __('Max filesize') }}: 0 Mb</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="urls" rows="15" wrap="off" class="form-control"></textarea>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-2">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">{{ __('Folder') }}</label>
                                </div>
                                <div class="col-auto flex-grow-1 flex-shrink-1">
                                    <select class="form-select" name="folder_id">
                                        <option value="0"> / </option>
                                        @foreach($folders as $folder)
                                            <option value="{{ $folder->id }}">{{ $folder->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ms-auto mb-2">
                            <input type="submit" name="submit_btn" value="{{ __('Add to upload queue') }}" class="btn btn-gradient submit-btn">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

@endsection
