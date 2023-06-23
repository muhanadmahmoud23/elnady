import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './components/App.vue';
import Home from './components/home.vue';

import studentIndex from './components/student/index.vue';
import StudentForm from './components/student/form.vue';
import studentShow from './components/student/show.vue';

import studentCourseIndex from './components/student_course/index.vue';
import studentCourseForm from './components/student_course/form.vue';
import studentCourseShow from './components/student_course/show.vue';

import scoreIndex from './components/score/show.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/students', component: studentIndex },
        { path: '/students/create', component: StudentForm },
        { path: '/students/:id/edit', component: StudentForm },
        { path: '/students/:id', component: studentShow },

        { path: '/student-course', component: studentCourseIndex },
        { path: '/student-course/:id/create', component: studentCourseForm },
        { path: '/student-course/:id', component: studentCourseForm },
        { path: '/student-course/show/:id', component: studentCourseShow },

        { path: '/score', component: scoreIndex },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');
