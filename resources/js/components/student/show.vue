<template>
    <div>
        <h5 id="associating-form-text-with-form-controls">Full Name:</h5>
        <h6>{{ student.full_name }}</h6>
        <h5 id="associating-form-text-with-form-controls">Code:</h5>
        <p>{{ student.code }}</p>
        <h5 id="associating-form-text-with-form-controls">Date of birth:</h5>
        <p> {{ student.date_of_birth }}</p>
        <h5 id="associating-form-text-with-form-controls">Email:</h5>
        <p> {{ student.email }}</p>
        <h5 id="associating-form-text-with-form-controls">Level:</h5>
        <p> {{ student.level }}</p>
        <router-link :to="`/students/${student.id}/edit`" class="btn btn-primary">Edit</router-link>
    </div>
</template>

<script>
import axios from 'axios';

export default {
data() {
    return {
    student: {}
    }
},
async created() {
    try {
    const response = await axios.get(`/api/students/${this.$route.params.id}`);
    this.student = response.data;
    } catch (error) {
    console.error(error);
    }
}
}
</script>
