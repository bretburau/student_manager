<template>
    <nav id="nav" class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <router-link class="navbar-brand" to="/">
                        Student Tracker
            </router-link>
            <ul class="navbar-nav ml-auto">
                <!--UNLOGGED-->
                <li class="nav-item" v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
                    <router-link class="nav-link" :to="{ name : route.path }" :key="key">
                        {{route.name}}
                    </router-link>
                </li>
                <!--LOGGED USER-->
                <li class="nav-item" v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
                    <router-link  class="nav-link" :to="{ name : route.path }" :key="key">
                        {{route.name}}
                    </router-link>
                </li>
                <!--LOGGED ADMIN-->
                <li class="nav-item" v-if="$auth.check(2)" v-for="(route, key) in routes.admin" v-bind:key="route.path">
                    <router-link  class="nav-link" :to="{ name : route.path }" :key="key">
                        {{route.name}}
                    </router-link>
                </li>
                <!--LOGOUT-->
                <li class="nav-item" v-if="$auth.check()">
                    <a href="#" class="nav-link"  @click.prevent="logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</template>
<script>
  export default {
    data() {
      return {
        routes: {
          // UNLOGGED
          unlogged: [
            {
              name: 'Register',
              path: 'register'
            },
            {
              name: 'Login',
              path: 'login'
            }
          ],
          admin: [
            {
              name: 'Dashboard',
              path: 'admin.dashboard'
            }
          ]
        }
      }
    },
    methods: {
      logout() {
          this.$auth.logout()
          this.$router.push('/loggedout') //todo why does this re-render?
      }
    }
  }
</script>