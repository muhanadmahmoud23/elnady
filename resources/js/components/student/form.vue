<template>
    <div>
      <h2 v-if="isNewStudent">Add Student</h2>
      <h2 v-else>Edit Student</h2>
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input class="form-control" type="text" id="full_name" v-model="student.full_name" required />
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Code:</label>
            <textarea class="form-control" id="number" v-model="student.code" required></textarea>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Date of birth:</label>
            <input class="form-control" type="date" id="pridate_of_birthdate_of_birthce" v-model="student.date_of_birth" required />
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Email:</label>
            <input class="form-control" type="email" id="email" v-model="student.email" required />
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Level:</label>
            <input class="form-control" type="number" id="level" v-model="student.level" required />
          </div>
          <button type="submit" v-if="isNewStudent" class="btn btn-primary">Add Student</button>
          <button type="submit" v-else class="btn btn-primary">Update Student</button>
        </form>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        student: {
          name: '',
          description: '',
          price: 0
        }
      }
    },
    computed: {
        isNewStudent() {
        return !this.$route.path.includes('edit');
      }
    },
    async created() {
      if (!this.isNewStudent) {
        const response = await axios.get(`/api/students/${this.$route.params.id}`);
        this.student = response.data;
      }
    },
    methods: {
      async submitForm() {
        try {
          if (this.isNewStudent) {
            await axios.post('/api/students', this.student);
          } else {
            await axios.put(`/api/students/${this.$route.params.id}`, this.student);
          }
          this.$router.push('/');
        } catch (error) {
          console.error(error);
        }
      }
    }
  }
  </script>
