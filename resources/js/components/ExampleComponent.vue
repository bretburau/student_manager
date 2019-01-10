<template>
    <div class="container">
        <h1>Students</h1>
        <a href="/students/create" class="btn btn-primary">Add Student</a>
        <br /><br />
        <ul class="list-group">
            <li v-for="student in students" :key="student.id">{{student.name}}</li>
        </ul>
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
                console.log('fetch students()', this.students)
                axios.get('/index').then((response) => {
                    console.log(this.students)
                    this.students = response.data
                    console.log(this.students)
                })
                .catch((err) => console.log(err))
            }
        }


    }
</script>
