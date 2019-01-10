<template>
  <div id="app">
    <ExampleComponent></ExampleComponent>
    {{ students }}
  </div>
</template>

<script>
import ExampleComponent from './components/ExampleComponent.vue'
export default {
  name: 'app',
  components: { ExampleComponent },
  data () {
    return {
      students: []
    }
  },

  mounted() {
    fetch('http://127.0.0.1:8000/students')
      .then(res => console.log(res))
  }
}
</script>

<style lang="scss">

</style>
