
<template>
    <div>
        <div class="plyr__video-embed" id="player">
            <iframe
            src="https://www.youtube.com/embed/TGSJjDahlrQ?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
            allowfullscreen
            allowtransparency
            allow="autoplay"
            ></iframe>
        </div>
        <!-- <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div> -->
        
    </div>
    
</template>


<script>
	export default {
		props: ['id', 'keyVideo'],
        data() {
            return {
                video: {},
                
            }
        },
        created () {
        	let url = '/api/video/'+this.id
        	axios.get(url)
        	.then(response => {
                this.video = response.data,
                this.keyVideo = 'https://www.youtube.com/embed/'+response.data.key+'?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1'
        	})
        }
    }
</script>


