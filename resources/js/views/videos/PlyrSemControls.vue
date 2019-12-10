<template>
  <div>
     <div>Duration: {{ duration }}</div>
        <vue-plyr @timeupdate="videoTimeUpdated" @playing="nowPlaying" @ready="playerReady" :emit="['ready','timeupdate','playing']" ref="player" :options="playerOptions" >
            <div class="plyr__poster">
                <iframe id="player"
                        :src="videoUrl"
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
  </div>
</template>

<script>
export default {
    //   name: "App",
    computed: {
        playerOptions () {
        const options = {
            title: "This is an example video", 
            playsinline: true,
            volume: 1, 
            controls: ['play', 'play-large'],
            debug: false
        };
        return options
        },
    },
    data() {
        return {
            duration: null,
            player: null,
            videoUrl: 'https://www.youtube.com/embed/bTqVqk7FSmY?iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1'
            //videoUrl: 'https://www.youtube.com/embed/jW4peJBTHcA?start=95&end=1380&version=3&playsinline=1'
        };
    },
    components: {},
    mounted() {
        this.player = this.$refs.player.player;
    },

    methods: {
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

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>