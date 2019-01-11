<template>
    <div class="container">
        <h1>Students</h1>
        <router-link to='/addstudent'>Add Student</router-link>
        <!-- <a href="/students/create" class="btn btn-primary">Add Student</a> -->
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
        components: { },
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
                console.log('fetch students()', this.students)
                axios.get('/api/students').then((response) => {
                    console.log(this.students)
                    this.students = response.data
                    console.log(this.students)
                })
                .catch((err) => console.log(err))
            }
        }


    }
</script>

<style scoped>
    .flex-container {
        display: flex;
        flex-wrap: wrap;
    }
</style>
