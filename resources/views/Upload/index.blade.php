@extends('layout.vedio')

@section('title')
Upload
@endsection


@section('main')

<main>
    <div class="container-fluid">


        <div class="nav section-tabs mb-4">
            <a class="nav-link active" data-target="div_file">File Upload</a>
            <a class="nav-link" data-target="div_url">URL Upload</a>



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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="54">
                                                <defs>
                                                    <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                                                        <stop offset="0%" stop-color="#8761ED"></stop>
                                                        <stop offset="100%" stop-color="#39B2E3"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="none"
                                                    d="M53.26 44.727h-3.069c-1.104 0-2-.9-2-2.011 0-1.11.896-2.011 2-2.011h3.069c4.819 0 8.74-3.942 8.74-8.787 0-4.846-3.921-8.788-8.74-8.788h-3.069a1.995 1.995 0 0 1-1.561-.754 2.018 2.018 0 0 1-.39-1.697c.728-3.264.089-6.641-1.802-9.509-2.183-3.315-5.855-5.659-10.072-6.429-8.268-1.514-16.33 3.266-17.978 10.648a2.003 2.003 0 0 1-1.952 1.571C9.579 16.96 4 22.286 4 28.833s5.579 11.872 12.436 11.872c1.105 0 2 .901 2 2.011a2.005 2.005 0 0 1-2 2.011C7.373 44.727 0 37.597 0 28.833c0-8.262 6.552-15.072 14.895-15.826C17.691 4.409 27.292-1.006 37.081.784c5.284.965 9.91 3.941 12.692 8.165 2.03 3.079 2.965 6.614 2.725 10.16h.762c7.025 0 12.74 5.746 12.74 12.809 0 7.063-5.715 12.809-12.74 12.809ZM30.364 22.784c.362-.365.863-.59 1.415-.59.553 0 1.053.225 1.415.589l9.205 9.256a2.019 2.019 0 0 1 0 2.844 1.992 1.992 0 0 1-2.828 0L33.78 29.06v22.912a2.006 2.006 0 0 1-2.001 2.011c-1.104 0-1.999-.9-1.999-2.011V29.059l-5.793 5.824a1.989 1.989 0 0 1-2.828 0 2.019 2.019 0 0 1 0-2.844l9.205-9.255Z">
                                                </path>
                                                <path fill="url(#a)"
                                                    d="M53.26 44.727h-3.069c-1.104 0-2-.9-2-2.011 0-1.11.896-2.011 2-2.011h3.069c4.819 0 8.74-3.942 8.74-8.787 0-4.846-3.921-8.788-8.74-8.788h-3.069a1.995 1.995 0 0 1-1.561-.754 2.018 2.018 0 0 1-.39-1.697c.728-3.264.089-6.641-1.802-9.509-2.183-3.315-5.855-5.659-10.072-6.429-8.268-1.514-16.33 3.266-17.978 10.648a2.003 2.003 0 0 1-1.952 1.571C9.579 16.96 4 22.286 4 28.833s5.579 11.872 12.436 11.872c1.105 0 2 .901 2 2.011a2.005 2.005 0 0 1-2 2.011C7.373 44.727 0 37.597 0 28.833c0-8.262 6.552-15.072 14.895-15.826C17.691 4.409 27.292-1.006 37.081.784c5.284.965 9.91 3.941 12.692 8.165 2.03 3.079 2.965 6.614 2.725 10.16h.762c7.025 0 12.74 5.746 12.74 12.809 0 7.063-5.715 12.809-12.74 12.809ZM30.364 22.784c.362-.365.863-.59 1.415-.59.553 0 1.053.225 1.415.589l9.205 9.256a2.019 2.019 0 0 1 0 2.844 1.992 1.992 0 0 1-2.828 0L33.78 29.06v22.912a2.006 2.006 0 0 1-2.001 2.011c-1.104 0-1.999-.9-1.999-2.011V29.059l-5.793 5.824a1.989 1.989 0 0 1-2.828 0 2.019 2.019 0 0 1 0-2.844l9.205-9.255Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <h3>Drag files here</h3>
                                        <div class="mb-4">All video formats allowed. Max upload per file is 50GB
                                        </div>
                                        <button type="button" class="btn btn-gradient submit-btn">Browse
                                            files</button>
                                        <input name="file" type="file" size="30" id="filepc"
                                            style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;opacity: 0;cursor: pointer;"
                                            accept=".mp4, .mkv, .avi, .webm, .ts, .mpg, .mpeg, .vob, .flv, .wmv, .3gp, .mov"
                                            multiple="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-2">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">Folder</label>
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
                            <input type="submit" name="submit_btn" value="Upload Files"
                                class="btn btn-gradient submit-btn">
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
                            <b>
                                You can enter up to
                                1 URLs:
                            </b>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="text-muted">
                                Max filesize: 0 Mb
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea name="urls" rows="15" wrap="off" class="form-control"></textarea>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-2">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">Folder</label>
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
                            <input type="submit" name="submit_btn" value="Add to upload queue"
                                class="btn btn-gradient submit-btn">
                        </div>
                    </div>
                </div>
            </div>
        </form>





    </div>
</main>

@endsection
