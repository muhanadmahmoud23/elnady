<template>
    <div>
        <div class="p-3">
            <router-link :to="`/student-course`" class="p-2 col border btn btn-primary">Back</router-link>
        </div>
        <h2>Manage <span style="color:rgb(222, 7, 7)">{{ course.name }}</span> Subject</h2>
        <form @submit.prevent="submitForm">
            <div class="mb-3">
                <label for="name" class="form-label">Please select student</label>
                <select class="form-control" v-model="course.student" required>
                    <option v-for="student in students" v-bind:key="student.id" :value="student.id">
                        {{ student.full_name }}
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Student To subject</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            course: {},
            students: {},
        }
    },
    async created() {
        try {
            const response = await axios.get(`/api/student-course/${this.$route.params.id}`);
            this.course = response.data.course;
            this.students = response.data.students
        } catch (error) {
            console.error(error);
        }
    },

    methods: {
        async submitForm() {
            try {
                await axios.post('/api/student-course', this.course);
                this.$router.push('/student-course');
            } catch (error) {
                console.error(error);
            }
        }
    }
}
</script>
