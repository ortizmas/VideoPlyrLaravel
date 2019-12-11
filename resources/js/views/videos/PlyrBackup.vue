<template>
    <div>
        <div>Duration: {{ duration }}</div>
        <vue-plyr @timeupdate="videoTimeUpdated" @playing="nowPlaying" @ready="playerReady" :emit="['ready','timeupdate','playing']" ref="player">
            <div class="plyr__poster">
                <iframe id="player"
                        :src= "videoUrl + idVideo"
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
    </div>
</template>

<script>

export default {
    props: ['id', 'code'],
    data() {
        return {
            duration: null,
            player: null,
            videoById: {},
            videoUrl: 'https://www.youtube.com/embed/',
            idVideo: this.code
            //videoUrl: `https://www.youtube.com/embed/${this.idVideo}?iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1`
            //videoUrl: 'https://www.youtube.com/embed/jW4peJBTHcA?start=95&end=1380&version=3&playsinline=1'
        };
        
    },
    // created: function () {
    //     this.getVideoById();
    // },
    created () {
        let url = '/api/video/'+this.id
        axios.get(url)
        .then(response => {
            this.videoById = response.data,
            this.idVideo = response.data.code
        })
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
        }
    },
    //components: {},
    mounted() {
        this.player = this.$refs.player.player;
    },
    methods: {
        getVideoById: function (event) {
            let url = '/api/video/'+this.id
            axios.get(url)
            .then(response => {
                this.videoById = response.data,
                this.idVideo = response.data.code
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