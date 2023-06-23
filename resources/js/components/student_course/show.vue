


<template>
    <div>
        <div class="p-3">
            <router-link :to="`/student-course`" class="p-2 col border btn btn-primary">Back</router-link>
        </div>
        <h5 class="btn-danger border rounded col-md-5 p-1">If Student Has Score For This subject, It cant be deleted</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student in course.students" :key="student.id">
                    <td>{{ student.id }}</td>
                    <td>{{ student.name }}</td>
                    <td>{{ student.code }}</td>
                    <td>{{ student.date_of_birth }}</td>
                    <td>{{ student.email }}</td>
                    <td>{{ student.level }}</td>
                    <td>
                        <div class="row gap-3">
                            <button @click="deletestudent(student.id, course.id)" type="button"
                                class="p-2 col border btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            course: []
        }
    },
    async created() {
        try {
            const response = await axios.get(`/api/getCourseStudents/${this.$route.params.id}`);
            this.course = response.data;
        } catch (error) {
            console.error(error);
        }
    },
    methods: {
        async deletestudent(id, courseId) {
            try {
                await axios.delete(`/api/deleteCourseStudents/${id}/${courseId}`);
                // this.students = this.students.filter(student => student.id !== id);
                this.$router.push('/student-course');
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>
