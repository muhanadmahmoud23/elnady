


<template>
    <div>
        <table class="table">

            <thead>
                <tr>
                    <th score="col">Course</th>
                    <th scope="col">Students Full Name</th>
                    <th scope="col">Student Code</th>
                    <th v-for="grade_item in grade_items" :key="grade_item.id">{{ grade_item.name }}</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="score in scores" :key="score.id">
                    {{ getTotal('reset') }}
                    <th>{{ score.course.name }}</th>
                    <td>{{ score.student.full_name }}</td>
                    <td>{{ score.student.code }}</td>
                    <td v-for="subject in score.score" :key="subject.id">{{ subject.score }}{{ getTotal(subject.score) }}
                    </td>
                    <td>{{ total }} </td>
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
            scores: [],
            total: 0,
        }
    },
    async created() {
        try {
            const response = await axios.get('/api/score');
            this.grade_items = response.data.grade_items;
            this.scores = response.data.scores;

        } catch (error) {
            console.error(error);
        }
    }, methods: {
        getTotal($num) {
            if ($num == 'reset') {
                this.total = 0;
            } else {
                this.total += Math.round($num);
            }
        }
    }
}
</script>
