@extends('layout.dmca')

@section('title')
    Dmca
@endsection


@section('main')
<main>
    <div class="container-fluid">
        <div class="block">
            <div class="block-bg">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-muted">
                            <tr>
                                <th style="width:1%;">
                                    <div class="form-check-radio"><input type="checkbox" id="selall"></div>
                                </th>
                                <th>{{ __('lang.File') }}</th>
                                <th>{{ __('lang.Code') }}</th>
                                <th>{{ __('lang.Reported, ago') }}</th>
                                <th>{{ __('lang.Delete after') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-muted">
                            @foreach ($deletedVideos as $video)
                            <tr>
                                <td>
                                    <div class="form-check-radio">
                                        <input type="checkbox" name="selected_videos[]" value="{{ $video->id }}">
                                    </div>
                                </td>
                                <td>{{ $video->name }}</td>
                                <td>{{ $video->id }}</td>
                                <td>{{ \Carbon\Carbon::parse($video->deleted_at)->diffForHumans() }}</td>
                                <td>{{ \Carbon\Carbon::parse($video->deleted_at)->addDays(30)->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
