<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- <div class="plyr__video-embed" id="player">
                        <iframe
                        src="https://www.youtube.com/embed/TGSJjDahlrQ?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                        allowfullscreen
                        allowtransparency
                        allow="autoplay"
                        ></iframe>
                    </div> -->
                    <transition name="slide-fade" mode="out-in">
                        <router-view :key="$route.fullPath"></router-view>
                    </transition>
                </div>

                <div class="col-md-3">
                    <div id="accordion">
                        <div class="card mb-1">
                            <div class="card-header" id="heading-1">
                                  <h5 class="mb-0">
                                    <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                      Lista de Videos
                                  </a>
                              </h5>
                            </div>
                            <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-1">
                                <ul class="list-group">
                                        <li class="list-group-item rounded-0" v-for="video in listVideo">
                                            <router-link :to="{name: 'video', params: {id: video.id}}" v-text="video.title"></router-link>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
    export default {
        created: function() {
            this.getVideo();
        },
        data: function() {
            return {
                listVideo: []
            }
        },
        // mounted() {
        //     let plyrVideo = document.createElement('script')
        //     plyrVideo.setAttribute('src', 'https://cdn.plyr.io/3.5.6/plyr.js')
        //     document.head.appendChild(plyrVideo)
        // },
        methods: {
            getVideo: function() {
                var urlVideos = "/api/videos";
                axios.get(urlVideos).then(response => {
                    this.listVideo = response.data;
                });
            }
        }

    }
</script>