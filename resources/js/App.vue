<template>
  <div>
    <router-link to='/register'>Register</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
import StudentList from './views/StudentList.vue'
export default {
  name: 'app',
  components: { StudentList }
}
</script>

<style lang="scss">

</style>
