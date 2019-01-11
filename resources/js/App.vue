<template>
  <div id="app">
    <nav>
      <router-link to="/">Home</router-link>
      <router-link to='/notification'>Notification</router-link>
      <router-link to='/addstudent'>Add Student</router-link>
    </nav>
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
