<template>
    <div>
        <div class="container">
        <h3>Edit Student</h3>
        <hr>
        <form method="GET" action="/api/students/edit" v-on:submit.prevent="onSubmit">
            <input type="hidden" name="_method" value="PATCH">
            <div class='form-group'>
                <input required v-model="form.name" class='form-control' type='text' name='name' :placeholder="this.form.name">
            </div>
    
            <div class='form-group'>
                <input required v-model="form.grade" class='form-control' type='number' name='grade' min="0" max="8" :placeholder="this.form.grade">
            </div>
    
            <div class='form-group'>
                <input required v-model="form.parent_email" class='form-control' type='text' name='parent_email' :placeholder="this.form.parent_email">
            </div>
    
            <hr />
            <h4>Bus number</h4>
            <div class="form-check form-check-inline">
                <input :checked="this.form.bus_number === 35" v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="35">
                <label class="form-check-label" for="inlineRadio1">35</label>
            </div>
    
            <div class="form-check form-check-inline">
                <input :checked="this.form.bus_number === 36" v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="36">
                <label class="form-check-label" for="inlineRadio1">36</label>
            </div>
    
            <div class="form-check form-check-inline">
                <input :checked="this.form.bus_number === 37" v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="37">
                <label class="form-check-label" for="inlineRadio1">37</label>
            </div>
                
            <div class="form-check form-check-inline">
                <input :checked="this.form.bus_number === 0" v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="0">
                <label class="form-check-label" for="inlineRadio1">Parent Pickup</label>
            </div>
            <br />
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</template>

<script>
    export default {
    data() {
        return {
            form: new Form({
                name: "",
                grade: null,
                parent_email: "",
                bus_number: null,
                teacher_id: null,
                id: null
            })
        }
    },

    mounted() {
        this.fetchStudent();
    },

    methods: {
         onSubmit() {
                this.form.patch(`/api/students/${this.form.id}/update`)
                    .then(this.$router.push('/'))
            },

        fetchStudent() {
            axios.get(`/api/students/${this.$route.params.id}`)
                .then(res => {
                    this.form.name = res.data.name
                    this.form.grade = res.data.grade
                    this.form.parent_email = res.data.parent_email
                    this.form.teacher_id = res.data.teacher_id
                    this.form.bus_number = res.data.bus_number
                    this.form.id = res.data.id
                })
        }
    }
    }
</script>

<style scoped>

</style>