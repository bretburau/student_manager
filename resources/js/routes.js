import VueRouter from 'vue-router';
import AddStudent from './views/AddStudent.vue'
import StudentList from './views/StudentList.vue'
import Notification from './components/Notification.vue'

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
        path: '/notification',
        component: Notification
    }
]


export default new VueRouter({
    routes,
    mode: 'history'
})