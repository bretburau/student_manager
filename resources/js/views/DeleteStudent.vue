<template>
    <div class="container">
        <h4>Are you sure you want to delete this student?</h4>
        <button v-on:click="this.delete()" class="btn btn-danger">Delete</button>
    </div>
</template>

<script>
    export default {
        methods: {
            delete() {
                axios.delete(`/api/students/${this.$route.params.id}/delete`)
                    .then(res => console.log(res))
            }
        }
    }
</script>

<style scoped>

</style>