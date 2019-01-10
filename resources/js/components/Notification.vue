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
                console.log(this.message)
                console.log(res)
                this.message = res.data[0]; 
                console.log(this.message)
                })
        }
    }
</script>

<style lang="scss">
    .notification {
        background: green;
    }
</style>