<template>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{student.name}}</h5>
            <p class="card-text">Parent contact: {{student.parent_email }}</p>
            <p class="card-text" v-if="student.bus_number === 0">Parent pick-up</p>
            <p class="card-text" v-else>Bus number: {{student.bus_number }}</p>
            <p class="card-text">Grade: {{student.grade}}</p>
            <div class="flex">
                <router-link to="/addstudent" class="btn btn-primary">Edit</router-link>
                <router-link to="/delete" class="btn btn-primary">Delete</router-link>
            </div>
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
    .flex {
        display: flex;
        justify-content: space-evenly;
    }
</style>