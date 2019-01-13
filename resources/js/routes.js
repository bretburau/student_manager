import VueRouter from 'vue-router';
import AddStudent from './views/AddStudent.vue'
import StudentList from './views/StudentList.vue'
import DeleteStudent from './views/DeleteStudent.vue'
import EditStudent from './views/EditStudent.vue'
import Register from './views/Register.vue'

let routes = [
    {
        path: '/addstudent',
        component: AddStudent
    },
    {
        path: '/',
            component: StudentList
    },
    {
        path: '/student/delete',
        component: DeleteStudent
    },
    {
        path: '/student/edit',
        component: EditStudent
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
          auth: false
        }
    }
]


export default new VueRouter({
    routes,
    mode: 'history'
})