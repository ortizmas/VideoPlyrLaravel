<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3 mt-3" v-for="item in list">
                <router-link class="card-header" :to="{name: 'users', params: {slug: item.id}}" v-text="item.email"></router-link>

                <div class="card-body">
                    <p class="card-text" v-text="item.name"></p>
                </div>
            </div>

            <infinite-loading @distance="1" @infinite="infiniteHandler">
                <div slot="no-more">--</div>
                <div slot="spinner">Cargando...</div>
                <div slot="no-results">Sin resultados</div>
            </infinite-loading>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: [],
                page: 0
            }
        },
        methods: {
            infiniteHandler($state) {
                this.page++
                let url = '/api/users?page='+this.page
                axios.get(url)
                .then(response => {
                    let users = response.data.data
                    if(users.length){
                        this.list = this.list.concat(users)
                        $state.loaded()
                    }else{
                        $state.complete()
                    }
                })
            }
        }
    }
</script>
