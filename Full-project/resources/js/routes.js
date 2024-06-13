import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from './components/Dashboard.vue';
import ListAppointments from './pages/appointments/ListAppointments.vue';

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
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
