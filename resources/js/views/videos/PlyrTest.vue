<template>
    <div>
        <div>Duration: {{ duration }}</div>
        <vue-plyr ref="plyr">
            <div class="plyr__video-embed">
                <iframe id="player"
                        :src= "videoUrl"
                        allowfullscreen
                        allowtransparency
                        allow="autoplay">
                </iframe>
            </div>
        </vue-plyr>
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
            //videoUrl: 'https://www.youtube.com/embed/',
            idVideo: this.code,
            videoUrl: `https://www.youtube.com/embed/${this.code}?iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1`
            //videoUrl: 'https://www.youtube.com/embed/jW4peJBTHcA?start=95&end=1380&version=3&playsinline=1'
        };
        
    },
    created: function () {
         this.getVideoById();
    },
    methods: {
        getVideoById: function (event) {
            let url = '/api/video/'+this.id
            axios.get(url)
            .then(response => {
                this.videoById = response.data
            });
        }
        
    }
    
};
</script>