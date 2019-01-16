<template>
    <div class="container">
        <h3>Students</h3>
        <router-link class='btn btn-primary' to='/addstudent'>Add Student</router-link>
        <br /><br />
        <div class="flex-container">
            <StudentCard 
                v-for="student in students" 
                :key="student.id"
                v-bind:student="student">
            </StudentCard>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                students: []
            }
        },

        mounted() {
            this.fetchStudents();
        },


        methods: {
            fetchStudents() {
                axios.get('/api/students').then((response) => {
                    this.students = response.data
                })
                .catch((err) => console.log(err))
            }
        }


    }
</script>

<style scoped>
    .container {
        padding-top: 1em;
    }
    .flex-container {
        display: flex;
        flex-wrap: wrap;
    }
</style>
