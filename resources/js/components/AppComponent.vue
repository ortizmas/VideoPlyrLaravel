<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <div class="plyr__video-embed" id="player">
                            <iframe
                            src="https://www.youtube.com/embed/TGSJjDahlrQ?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                            allowfullscreen
                            allowtransparency
                            allow="autoplay"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Lista de videos</div>
                    <div class="card-body">
                        <div id="accordion">
                            <div class="card mb-1">
                                <div class="card-header" id="heading-1">
                                    <h5 class="mb-0">
                                        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Item 1
                                    </a>
                                </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-1">
                                    <ul class="list-group">
                                        <li class="list-group-item rounded-0">
                                            <router-link :to="{neme: 'home'}">Home</router-link>
                                        </li>
                                            <li class="list-group-item rounded-0"><router-link :to="{neme: 'blog'}">Blog</router-link>
                                        </li>
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

        <transition name="slide-fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </div>    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>