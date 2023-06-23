<template>
    <h1>Courses</h1>
    <table class="table table-hover table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Number of students</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="subject in subjects" :key="subject.id">
                <td>{{ subject.name }}</td>
                <td>{{ subject.code }}</td>
                <td>{{ subject.count }}</td>
                <td class="col-4 p-3">
                    <div class="row">
                        <router-link :to="`/student-course/${subject.id}`" class="p-2 col border btn btn-primary">Add
                            Student to subject</router-link>
                        <router-link :to="`/student-course/show/${subject.id}`"
                            class="p-2 col border btn btn-primary">Show-remove Student</router-link>
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
            .get("api/student-course")
            .then((res) => {
                this.subjects = res.data;
                $('#example').DataTable();
            })
    },
    data: function () {
        return {
            subjects: []
        }
    },
}
</script>
