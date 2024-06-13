
import Vue from 'vue';
import Router from 'vue-router';
import Dashboard from './components/Dashboard.vue';
import ListAppointments from './pages/appointments/ListAppointments.vue';
// import ListUsers from './pages/users/ListUsers.vue';

Vue.use(Router);

const routes = [
  {
    path: '/admin/dashboard',
    name: 'admin.dashboard',
    component: Dashboard,
  },
  {
    path: '/admin/appointments',
    name: 'admin.appointments',
    component: ListAppointments,
  },
//   {
//     path: '/admin/users',
//     name: 'admin.users',
//     component: ListUsers,
//   },
];

const router = new Router({
  mode: 'history',
  routes,
});

export default router;
