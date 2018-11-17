@extends('canvas::canvas.index')

@section('actions')
    <a href="{{ route('canvas.tag.create') }}" class="btn btn-sm btn-outline-primary mr-2 my-auto mx-3">
        New Tag
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Tags</h1>

                @include('canvas::canvas.components.notifications.success')
                @include('canvas::canvas.components.notifications.error')

                @if(count($data['tags']))
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0 mt-4">
                                <tbody>
                                {{--@foreach($data['tags'] as $tag)--}}
                                    {{--<tr class="border-top">--}}
                                        {{--<td>--}}
                                            {{--<p class="mb-0 py-2">--}}
                                                {{--<a href="{{ route('canvas.post.edit', $post->id) }}"--}}
                                                   {{--class="font-weight-bold lead">{{ $post->title }}</a>--}}
                                                {{--@if($post->summary)--}}
                                                    {{--<br>--}}
                                                    {{--{{ $post->summary }}--}}
                                                {{--@endif--}}
                                                {{--<br>--}}
                                                {{--<small class="text-muted">--}}
                                                    {{--Published {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}--}}
                                                    {{-----}}
                                                    {{--Updated {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }} @if(count($post->tags))--}}
                                                        {{--— Tags: {{ implode(', ', $post->tags) }} @endif</small></p>--}}
                                        {{--</td>--}}
                                        {{--<td class="text-right align-middle">--}}
                                            {{--<i class="far fa-fw fa-image fa-2x text-muted align-middle"></i>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                </tbody>
                            </table>
                        </div>

                        {{ $data['tags']->links() }}
                    </div>
                @else
                    <p class="mt-4">No tags were found, start by <a href="{{ route('canvas.tag.create') }}">adding a new tag</a>.</p>
                @endif
            </div>
        </div>
    </div>
@endsection