@extends('layout.vedio')

@section('title')
    Vedio
@endsection


@section('main')
    <main id="MyVedio">




        <div class="container-fluid">



            <div class="files">
                <div class="files-nav">


                </div>
                <div class="block storage">
                    <div class="semi-donut mb-3" style="--percentage : 80; ">
                        Storage
                    </div>
                    <div class="small text-muted text-center">Used space <b>0.0</b> GB</div>
                </div>


                <div class="row flex-lg-nowrap">
                    <div class="col-12 col-lg-auto files-right order-lg-last position-static">
                        <form method="GET" action="{{ route('folders.index') }}">
                            <div class="folders block">
                                <div class="block-bg px-4 py-4">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <h5 class="mb-0 fw-normal">My folders</h5>
                                        </div>
                                        <div class="col-auto ps-0">
                                            <button type="button" class="btn folders-add" data-bs-toggle="modal"
                                                data-bs-target="#modal-folder-add">
                                                +
                                            </button>
                                        </div>
                                    </div>

                                    <!-- البحث -->
                                    <div class="search folders-search mb-3">
                                        <input type="text" class="form-control" name="query"
                                            value="{{ request('query') }}" placeholder="Search folder">
                                        <button class="btn icon-btn" type="submit">🔍</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- عرض الملفات -->
                        <ul class="nav folders-list flex-column mb-3" id="xfolders">
                            @if (isset($folders) && $folders->count())
                                @foreach ($folders as $folder)
                                    <li class="nav-item">{{ $folder->name }}</li>
                                @endforeach
                            @else
                                <li class="nav-item">لا يوجد مجلدات</li>
                            @endif
                        </ul>

                        <div class="folders-stats">
                            <div class="row align-items-center">
                                @if (isset($folders) && is_countable($folders))
                                    {{ count($folders) }}
                                @else
                                    0
                                @endif

                            </div>
                        </div>

                        <!-- المودال الخاص بالإضافة -->
                        <div class="modal fade" id="modal-folder-add" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('folders.store') }}">
                                        @csrf
                                        <div class="modal-header pb-0">
                                            <h5 class="modal-title">New folder</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <input type="text" name="name" placeholder="Create New Folder"
                                                    class="form-control" required>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-gradient submit-btn">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>

                    <div class="col-12 col-lg-auto flex-grow-1 flex-shrink-1 mw-0">
                        <div class="block files-container">
                            <div class="row flex-lg-nowrap mb-2">
                                <div class="col-12 col-sm-auto mb-2">

                                    <form>

                                        <div class="search files-search">
                                            <input type="text" class="form-control" name="" value=""
                                                placeholder="Search file">
                                            <button class="btn icon-btn" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                                    <path fill-rule="evenodd" fill="currentColor"
                                                        d="M6.343.204a6.13 6.13 0 0 1 6.123 6.123 6.07 6.07 0 0 1-1.237 3.65l2.73 2.729a.875.875 0 1 1-1.237 1.237l-2.73-2.729a6.059 6.059 0 0 1-3.649 1.236 6.123 6.123 0 0 1 0-12.246Zm0 10.496a4.373 4.373 0 1 0 0-8.746 4.373 4.373 0 0 0 0 8.746Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>


                                </div>
                                <div class="col-12 col-sm-auto mb-2 ms-auto">
                                    <div class="files-controls">
                                        <button type="button" class="btn icon-btn me-1"
                                            onclick="$('#btn-del').trigger('click')" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18">
                                                <path fill-rule="evenodd" fill="currentColor"
                                                    d="m15.913 5.549-.804 9.757C15.113 16.754 13.882 18 12.37 18H5.345c-1.513 0-2.744-1.246-2.744-2.777l-.799-9.674a.99.99 0 0 1-.957-.993c0-.553.442-1 .988-1h3.403V1.889C5.236.847 6.072 0 7.101 0h3.512a1.88 1.88 0 0 1 1.867 1.889v1.667h3.402c.546 0 .987.447.987 1a.989.989 0 0 1-.956.993ZM10.504 2H7.211v1.556h3.293V2ZM3.785 5.556l.788 9.584c.004.511.349.86.772.86h7.025a.773.773 0 0 0 .767-.777l.794-9.667H3.785Zm7.526 7.707a.979.979 0 0 1-1.396 0l-1.058-1.071L7.8 13.263a.98.98 0 0 1-1.397 0 1.008 1.008 0 0 1 0-1.414l1.057-1.072-1.057-1.07a1.008 1.008 0 0 1 0-1.414.979.979 0 0 1 1.397 0l1.057 1.07 1.058-1.07a.977.977 0 0 1 1.396 0c.386.39.386 1.023 0 1.414l-1.057 1.07 1.057 1.072c.386.39.386 1.023 0 1.414Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn icon-btn me-1"
                                            onclick="$('#btn-rename').trigger('click')" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18">
                                                <path fill-rule="evenodd" fill="currentColor"
                                                    d="m17.677 5.211-7.831 7.844a.985.985 0 0 1-.697.289H6.385a.987.987 0 0 1-.986-.987V9.588c0-.261.104-.513.289-.698l6.447-6.458.001-.001.001-.001 1.381-1.384c1.109-1.113 3.047-1.113 4.158 0a2.954 2.954 0 0 1 .001 4.165ZM7.371 11.369h1.37l5.462-5.472-1.369-1.371-5.463 5.472v1.371Zm8.911-8.926a.99.99 0 0 0-1.369-.001l-.685.687 1.369 1.372.685-.686a.972.972 0 0 0 0-1.372ZM6.385 5.961H3.621a.859.859 0 0 0-.856.859v8.305c0 .474.384.858.856.858h8.291a.858.858 0 0 0 .857-.858v-2.768a.986.986 0 1 1 1.971 0v2.768a2.834 2.834 0 0 1-2.828 2.833H3.621a2.834 2.834 0 0 1-2.828-2.833V6.82a2.834 2.834 0 0 1 2.828-2.834h2.764a.987.987 0 0 1 0 1.975Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn icon-btn me-1"
                                            onclick="$('#btn-move').trigger('click')" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16">
                                                <path fill-rule="evenodd" fill="currentColor"
                                                    d="M15.223 15.93H2.778C1.246 15.93 0 14.708 0 13.205V3.616C0 2.114 1.246.892 2.778.892h3.555c.266 0 .52.103.707.287l2.374 2.328h5.809C16.754 3.507 18 4.729 18 6.231v6.974c0 1.503-1.246 2.725-2.777 2.725ZM2.778 2.853A.772.772 0 0 0 2 3.616v9.589c0 .421.349.764.778.764h12.445a.772.772 0 0 0 .777-.764V6.231a.772.772 0 0 0-.777-.763H9c-.265 0-.52-.103-.707-.287L5.919 2.853H2.778Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn icon-btn me-1"
                                            onclick="$('#btn-export').trigger('click')" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18">
                                                <path fill-rule="evenodd" fill="currentColor"
                                                    d="M18.808.702c.05.122.076.251.076.381v4.975a.994.994 0 1 1-1.99 0V3.485l-8.253 8.253a.992.992 0 0 1-1.407 0 .997.997 0 0 1 0-1.408l8.253-8.252h-2.573a.996.996 0 1 1 0-1.991h4.975a1.005 1.005 0 0 1 .919.615ZM8.933 5.063H3.957a.997.997 0 0 0-.995.995v8.957c0 .549.447.995.995.995h8.957a.996.996 0 0 0 .995-.995v-4.976a.994.994 0 1 1 1.99 0v4.976A2.988 2.988 0 0 1 12.914 18H3.957a2.988 2.988 0 0 1-2.985-2.985V6.058a2.988 2.988 0 0 1 2.985-2.985h4.976a.995.995 0 0 1 0 1.99Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn icon-btn me-1"
                                            onclick="$('#btn-tagd').trigger('click')" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                                <path fill-rule="evenodd" fill="currentColor"
                                                    d="M17.148 12.602 12.6 17.15a2.897 2.897 0 0 1-2.055.85 2.897 2.897 0 0 1-2.056-.85L.851 9.512A2.891 2.891 0 0 1 0 7.456V3.824A3.828 3.828 0 0 1 3.824 0h3.632A2.893 2.893 0 0 1 9.51.851l7.638 7.639c.55.549.852 1.28.852 2.056a2.89 2.89 0 0 1-.852 2.056Zm-1.413-2.697-7.639-7.64A.905.905 0 0 0 7.455 2H3.824A1.826 1.826 0 0 0 2 3.824v3.632a.9.9 0 0 0 .266.642l7.637 7.638a.902.902 0 0 0 1.281.001l4.55-4.55a.901.901 0 0 0 .266-.641.9.9 0 0 0-.265-.641Zm-10.5-2.728a1.944 1.944 0 0 1-1.941-1.941c0-1.071.871-1.942 1.941-1.942 1.071 0 1.941.871 1.941 1.942 0 1.07-.87 1.941-1.941 1.941Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn icon-btn me-1"
                                            onclick="$('#btn-public').trigger('click')" disabled="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16">
                                                <path fill-rule="evenodd" fill="currentColor"
                                                    d="M19.816 8.81c-2.57 4.624-5.877 6.968-9.829 6.968-3.953 0-7.259-2.344-9.829-6.968a1.049 1.049 0 0 1 0-1.016C2.728 3.17 6.034.826 9.987.826c3.952 0 7.259 2.344 9.829 6.968.175.314.175.701 0 1.016ZM9.987 2.874c-3.09 0-5.649 1.778-7.808 5.428 2.159 3.65 4.718 5.428 7.808 5.428s5.648-1.778 7.807-5.428c-2.159-3.65-4.717-5.428-7.807-5.428Zm0 8.295c-1.538 0-2.789-1.286-2.789-2.867s1.251-2.867 2.789-2.867c1.537 0 2.788 1.286 2.788 2.867s-1.251 2.867-2.788 2.867Zm0-3.686a.81.81 0 0 0-.797.819.81.81 0 0 0 .797.819.808.808 0 0 0 .796-.819.808.808 0 0 0-.796-.819Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>





                            <div class="block-bg files-list px-4 py-3" id="xfiles">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="nojs">
                                                    <div class="form-check-radio">
                                                        <input type="checkbox" name="all" id="selall">
                                                    </div>
                                                </th>
                                                <th>Filename / Description</th>
                                                <th>Filesize</th>
                                                <th>Views</th>
                                                <th>DL</th>
                                                <th>Published</th>
                                                <th>Uploaded</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($videos as $video)
                                                <tr>
                                                    <td>
                                                        <div class="form-check-radio">
                                                            <input type="checkbox" name="file_id"
                                                                value="{{ $video->id }}">
                                                        </div>
                                                    </td>
                                                    <td class="left">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mx-3">
                                                                <a href="{{ $video->video_url ?? '#' }}">
                                                                    {{ $video->title }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td align="right" nowrap="">

                                                        {{ $video->size ?? 'N/A' }} MB
                                                    </td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>
                                                        <input class="public-checkbox" type="checkbox" name="pub"
                                                            value="1">
                                                    </td>
                                                    <td>{{ $video->created_at->format('Y-m-d') }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn icon-btn" data-bs-toggle="dropdown">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                                    height="16">
                                                                    <path fill-rule="evenodd" fill="currentColor"
                                                                        d="M2.37 9.846C1.297 9.846.424 9.018.424 8c0-1.018.873-1.846 1.946-1.846 1.072 0 1.946.828 1.946 1.846 0 1.018-.874 1.846-1.946 1.846Zm0-6.154c-1.073 0-1.946-.828-1.946-1.846C.424.828 1.297 0 2.37 0c1.072 0 1.946.828 1.946 1.846 0 1.018-.874 1.846-1.946 1.846Zm0 8.616c1.072 0 1.946.828 1.946 1.846C4.316 15.172 3.442 16 2.37 16c-1.073 0-1.946-.828-1.946-1.846 0-1.018.873-1.846 1.946-1.846Z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <form action="{{ route('videos.destroy', $video->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Are you sure you want to soft-delete this video?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="dropdown-item"
                                                                        type="submit">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-file-rename" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Rename title for selected files</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pt-0">
                                <div class="mb-3 row">
                                    <div class="col-lg-4 col-form-label text-lg-end"> Add prefix </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="rename_prefix" value="" size="12"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-4 col-form-label text-lg-end"> Add postfix </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="rename_postfix" value="" size="12"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-4 col-form-label text-lg-end"> Replace </div>
                                    <div class="col-lg-8">
                                        <div class="row flex-nowrap align-items-center g-2">
                                            <div class="col-auto flex-grow-1 flex-shrink-1">
                                                <input type="text" name="rename_replace1" value=""
                                                    size="12" class="form-control">
                                            </div>
                                            <div class="col-auto"> with </div>
                                            <div class="col-auto flex-grow-1 flex-shrink-1">
                                                <input type="text" name="rename_replace2" value=""
                                                    size="12" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="rename" value="Rename titles"
                                        class="btn btn-gradient submit-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="modal-file-move" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header pb-0">
                                <h5 class="modal-title">
                                    Choose folder to move selected to
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3 flex-lg-nowrap">
                                    <div class="col-auto flex-grow-1 flex-shrink-1">
                                        <input type="text" id="fld_filter2" xsize="16" class="form-control">
                                    </div>
                                    <div class="col-auto">
                                        <input type="button" value="Filter folders below" id="fld_filter_btn2"
                                            class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <select name="to_folder" size="6" id="fld_select2"
                                        class="form-control"></select>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="file_move" id="fld_submit2" value="Move to Folder"
                                        class="btn btn-gradient submit-btn" style="display:none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="modal-tagd" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header pb-0">
                                <h5 class="modal-title">
                                    Add tags to selected
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <input class="form-control" type="text" name="tags" size="24">
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="multi_tag" value="Add"
                                        class="btn btn-gradient submit-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </main>
@endsection
