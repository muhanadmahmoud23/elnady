<template>
    <div class="card">
        <div class="card-header">
            <h1>Elnady Eng School Managment system</h1>
        </div>
    </div>

    <div class="card-body container">
        <div class="col-md-12 row pb-5 ">
            <h2 class="border">Students</h2>
            <div class="col-md-3">
                <router-link :to="`/students`" class="col-md-12 p-2 col border btn btn-primary">Students</router-link>
            </div>
            <div class="col-md-3">
                <router-link :to="`/students/create`" class="col-md-12 p-2 col border btn btn-primary">Add
                    Students</router-link>
            </div>
        </div>


        <div class="col-md-12 row pb-5 ">
            <h2 class="border">Courses</h2>

            <div class="col-md-3">
                <router-link :to="`/student-course`" class="col-md-12 p-2 col border btn btn-primary">Courses</router-link>
            </div>
        </div>

        <div class="col-md-12 row pb-5 ">
            <h2 class="border">Students Scores</h2>
            <div class="col-md-3">
                <router-link :to="`/score`" class="col-md-12 p-2 col border btn btn-primary">Student Score</router-link>
            </div>

        </div>

    </div>
</template>
