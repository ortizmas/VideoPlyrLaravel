<template>
    <div>
        <section class="jumbotron text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1 class="jumbotron-heading" v-text="post.name"></h1>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="display-3" ></h1>
                    <hr>
                    <p v-text="post.email"></p>
                    <div v-html="post.name"></div>
                    <hr>
                    <h1 class="display-4">Otros artículos</h1>

                    <posts></posts>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['slug'],
        data() {
            return {
                post: {}
            }
        },
        created () {
            let url = '/users/'+this.slug
            axios.get(url)
            .then(response => {
                this.post = response.data
            })
        }
    }
</script>