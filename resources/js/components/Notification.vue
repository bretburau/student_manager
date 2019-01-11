<template>
    <div class="notification">
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello World'
            }
        },

        mounted() {
            axios.get('/index').then(res => {
                this.message = res.data[0]; 
                })
        }
    }
</script>

<style lang="scss">
    .notification {
        background: green;
    }
</style>