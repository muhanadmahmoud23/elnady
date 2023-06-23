<template>
    <h1>Students</h1>
    <div class="p-3">
        <router-link :to="`/students/create`" class="p-2 col border btn btn-primary">Add New Student</router-link>
    </div>
    <table class="table table-hover table-bordered" id="example">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="student in students" :key="student.id">
                <td>{{ student.id }}</td>
                <td>{{ student.full_name }}</td>
                <td>{{ student.email }}</td>
                <td>{{ student.date_of_birth }}</td>
                <td>{{ student.level }}</td>
                <td>
                    <div class="row gap-3">
                        <router-link :to="`/students/${student.id}`"
                            class="p-2 col border btn btn-primary">View</router-link>
                        <router-link :to="`/students/${student.id}/edit`"
                            class="p-2 col border btn btn-success">Edit</router-link>
                        <button @click="deletestudent(student.id)" type="button"
                            class="p-2 col border btn btn-danger">Delete</button>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>
</template>

<script>
//Bootstrap and jQuery libraries
import 'bootstrap/dist/css/bootstrap.min.css';
import 'jquery/dist/jquery.min.js';
//Datatable Modules
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"
import $ from 'jquery';


import axios from 'axios';
export default {

    mounted() {
        //API Call
        axios
            .get("api/students")
            .then((res) => {
                this.students = res.data;
                $('#example').DataTable();
            })
    },
    data: function () {
        return {
            students: []
        }
    },
}
</script>
