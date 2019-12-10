<template>
  <div id="app2">
     <div>Duration: {{ duration }}</div>
        <vue-plyr @timeupdate="videoTimeUpdated" @playing="nowPlaying" @ready="playerReady" :emit="['ready','timeupdate','playing']" ref="player">
            <div class="plyr__poster">
                <iframe id="player"
                        :src="mySrc + myId"
                        allowfullscreen
                        allowtransparency
                        allow="autoplay">
                </iframe>
            </div>
        </vue-plyr>
        <!-- <vue-plyr>
            <div class="plyr__video-embed">
                <iframe
                :src="videoUrl"
                allowfullscreen allowtransparency allow="autoplay">
                </iframe>
            </div>
        </vue-plyr> -->
        <!-- <vue-plyr>
            <div data-plyr-provider="youtube" v-bind:data-plyr-embed-id="$data.videoById.key"></div>
        </vue-plyr> -->
        <h2 :class="idVideo">@{{ myId }}</h2>
  </div>
</template>

<script>
export default {
    el: '#app2',
    props: ['id'],
    created: function () {
        this.getVideoById();
    },
    data() {
        return {
            duration: null,
            player: null,
            videoById: {},
            idVideo: {},
            //videoUrl: "https://www.youtube.com/embed/jW4peJBTHcA?iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
            //videoUrl: 'https://www.youtube.com/embed/jW4peJBTHcA?start=95&end=1380&version=3&playsinline=1'
        };
    },
    computed: {
        playerOptions () {
            const options = {
                title: "This is an example video", 
                playsinline: false,
                volume: 0, 
                controls: ['play', 'play-large'],
                debug: false
            };
            return options
        },
         mySrc: {
            get: function() {
                //concat using template literal
                return `https://www.youtube.com/embed/`
            }
        },
         myId: {
            get: function() {
                //concat using template literal JSON.stringify(this.json, null, '    ');
                return this.idVideo
            }
        }
    },
    //components: {},
    mounted() {
        this.player = this.$refs.player.player;
    },
    methods: {
        getVideoById: function () {
            let url = '/api/video/'+this.id
            axios.get(url)
            .then(response => {
                this.videoById = response.data,
                this.idVideo = response.data.key
            });
        },
        videoTimeUpdated: function(event) {
            this.duration = this.player.currentTime;
            // this if statement doesn't seem to do anything
            if (this.player.currentTime > 105) {
                this.player.stop()
            }
        },
        nowPlaying: function(event) {
            console.log(event);
        },
        playerReady () {
            this.player.currentTime = 95
            console.log('player ready')
        }
        
    }
    
};
</script>