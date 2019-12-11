<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- <transition name="slide-fade" mode="out-in">
                        <router-view :key="$route.fullPath"></router-view>
                    </transition> -->
                    <router-view :key="$route.fullPath"></router-view>
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
                                            <router-link :to="{name: 'video', params: {id: video.id, code:video.code}}" v-text="video.title"></router-link>
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
                listVideo: [],
                idV:''
            }
        },
        methods: {
            getVideo: function() {
                var urlVideos = "/api/videos";
                axios.get(urlVideos).then(response => {
                    this.listVideo = response.data;
                    this.idV = response.data.code;
                });
            }
        }

    }
</script>