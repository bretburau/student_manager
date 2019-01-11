import VueRouter from 'vue-router';
import AddStudent from './views/AddStudent.vue'
import StudentList from './views/StudentList.vue'
import DeleteStudent from './views/DeleteStudent.vue'
import EditStudent from './views/EditStudent.vue'

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
    }
]


export default new VueRouter({
    routes,
    mode: 'history'
})