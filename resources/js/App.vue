<template>
  <div>
    <Menu></Menu>
    <router-view></router-view>
  </div>
</template>

<script>
import StudentList from './views/StudentList.vue'
import Menu from './components/Menu.vue'
export default {
  name: 'app',
  components: { StudentList, Menu }
}
</script>

<style lang="scss">

</style>
