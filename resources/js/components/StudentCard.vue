<template>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{student.name}}</h5>
            <p class="card-text">Parent contact: {{student.parent_email }}</p>
            <p class="card-text" v-if="student.bus_number === 0">Parent pick-up</p>
            <p class="card-text" v-else>Bus number: {{student.bus_number }}</p>
            <p class="card-text">Grade: {{student.grade}}</p>
            <a href="#" class="btn btn-primary">Edit</a>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['student']
    }
</script>

<style scoped>
    .card {
        margin: 1rem;
    }
</style>