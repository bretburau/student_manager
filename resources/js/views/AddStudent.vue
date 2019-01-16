<template>
    <div class="container">
        <h3>Add a Student</h3>
        <hr>
        <form method="POST" action="/api/students/create" v-on:submit.prevent="onSubmit">
            <div class='form-group'>
                <input required v-model="form.name" class='form-control' type='text' name='name' placeholder="Student's Name">
            </div>
    
            <div class='form-group'>
                <input required v-model="form.grade" class='form-control' type='number' name='grade' min="0" max="8" placeholder="Grade">
            </div>
    
            <div class='form-group'>
                <input required v-model="form.parent_email" class='form-control' type='text' name='parent_email' placeholder="Parent's Email">
            </div>
    
            <hr />
            <h4>Bus number</h4>
            <div class="form-check form-check-inline">
                <input v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="35">
                <label class="form-check-label" for="inlineRadio1">35</label>
            </div>
    
            <div class="form-check form-check-inline">
                <input v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="36">
                <label class="form-check-label" for="inlineRadio1">36</label>
            </div>
    
            <div class="form-check form-check-inline">
                <input v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="37">
                <label class="form-check-label" for="inlineRadio1">37</label>
            </div>
                
            <div class="form-check form-check-inline">
                <input v-model="form.bus_number" class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="0">
                <label class="form-check-label" for="inlineRadio1">Parent Pickup</label>
            </div>
            <br />
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
                    bus_number: null
                })
            }
        },
        methods: {
            onSubmit() {
                this.form.post('/api/students/create')
                    .then(this.$router.push('/'))
            }
        }
    }
</script>

<style scoped>
    .container {
        margin-top: 1em;
    }
</style>