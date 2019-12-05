@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />
    <style>
        
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <div class="plyr__video-embed" id="player">
                        <iframe
                        src="https://www.youtube.com/embed/{{ $keyVideo }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                        allowfullscreen
                        allowtransparency
                        allow="autoplay"
                        ></iframe>
                    </div> --}}
                    <div id="sec_video">
                        {{-- <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="{{ $keyVideo }}"></div> --}}
                        <video id="player" controls>
                        </video>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Lista de videos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="accordion">
                        <div class="card mb-1">
                            <div class="card-header" id="heading-1">
                                  <h5 class="mb-0">
                                    <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                      Item 1
                                  </a>
                              </h5>
                            </div>
                            <div id="collapse-1" class="collapse {{ (isset($show)) ? 'show' : '' }}" data-parent="#accordion" aria-labelledby="heading-1">
                                <ul class="list-group">
                                    @foreach ($videos as $video)
                                        <li class="list-group-item rounded-0"><a class="btn-article" href="javascript:void(0)" data-id="{{ $video['id'] }}" title="">{{ $video['title'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="accordion_2">
                        <div class="card mb-1">
                            <div class="card-header" id="heading-2">
                                  <h5 class="mb-0">
                                    <a role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                      Item 1
                                  </a>
                              </h5>
                            </div>
                            <div id="collapse-2" class="collapse" data-parent="#accordion_2" aria-labelledby="heading-2">
                                <ul class="list-group">
                                    <li class="list-group-item rounded-0">Cras justo odio</li>
                                    <li class="list-group-item rounded-0">Dapibus ac facilisis in</li>
                                    <li class="list-group-item rounded-0">Morbi leo risus</li>
                                    <li class="list-group-item rounded-0">Porta ac consectetur ac</li>
                                    <li class="list-group-item rounded-0">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdn.plyr.io/3.5.6/plyr.js"></script>

    <script>
        var $ = jQuery;
        jQuery(document).ready(function($){

            $('.btn-article').click(function(e) {
                e.preventDefault(); // previnir da página ser carregada
                namesWrapper = $('#sec_video');
                var artigo_id = $(this).data('id');
                $.ajax({
                    type: 'GET',
                    url: '/carregar/video/' + artigo_id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                    },
                    success: function (data) {
                        
                        namesWrapper.html('');
                        var iframes = '<video id="player" controls></video>';
                        namesWrapper.append(iframes)
                        const player = new Plyr('#player');
                        player.source = {
                            debug: true,
                            autoplay: true,
                            type: 'video',
                            sources: [
                                {
                                    src: data.key, // From the YouTube video link
                                    provider: 'youtube'
                                }, 
                            ]
                        };
                        
                            
                    }
                });
            });
        });
    </script>

    <script>
        const player = new Plyr('#player');
        player.source = {
            type: 'video',
            sources: [
                {
                    src: '{{ $keyVideo }}', // From the YouTube video link
                    provider: 'youtube'
                }, 
            ]
        };
    </script>

    
@endsection
