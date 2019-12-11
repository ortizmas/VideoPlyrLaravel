<template>
    <div style="max-height: 560px">
        <h1 class="title is-size-3" style="text-align: center;">{{ videoTitle }}</h1>
        <vue-plyr ref="plyr">
        <div class="plyr__video-embed">
            <iframe
            v-bind:src="videoUrl"
            allowfullscreen
            allowtransparency
            allow="autoplay"
            height="100%"
            width="100%"
            ></iframe>
        </div>
        </vue-plyr>
        <div class="vimeoPlayer"></div>
    </div>
</template>
<script>
//import { GET_VIDEO } from "../utils/endpoint.js";

const axios = require("axios");
export default {
  name: "Vimeo",
  props: ['id', 'code'],
  data() {
    return {
      videoUrl: "",
      videoTitle: "",
      videoVimeoId: ""
    };
  },
  computed: {
    player() {
      return this.$refs.plyr.player;

    }
  },
  methods: {
    onVideoPause: function() {
      console.log("Video is Paused");
    }
  },
  mounted() {
    this.video_id = this.$route.query.video_id;
    axios
      .get('/api/video/'+this.id)
      .then(response => {
        this.videoUrl = "https://www.youtube.com/embed/"
          + response.data.code +
          "?loop=false&byline=false&portrait=false&title=false&speed=true&transparent=0&gesture=media";
        this.videoTitle = response.data.title;
        this.videoVimeoId = response.data.code;
        //this.videoVimeoId = response.data.video_url.split("/")[4];
        console.log(this.video_id);
      })
      .catch(e => {
        console.log(e);
      });
  }
};
</script>