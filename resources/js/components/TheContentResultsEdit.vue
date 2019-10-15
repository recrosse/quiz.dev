<template>
    <div :class="{'is-waiting': isWaiting}">

        <div>Город: {{formData.city}}</div>
        <div>№ Пекарни {{formData.bakery}}</div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Вопрос</th>
                <th scope="col">
                    <div>Ответ</div>
                </th>
            </tr>
            </thead>
            <tbody>
            <template v-for="(record,i) in results">

                <tr v-if="i<(results.length-2)">
                    <td>{{i+1}}</td>
                    <td>{{record.question}}</td>
                    <td>{{record.answer}}</td>
                </tr>
            </template>
            </tbody>
        </table>
        <div>{{results[results.length-1].question}}:<br> {{results[results.length-1].answer}}</div>
    </div>
</template>
<script>
    import router from 'vue-router'
    import axios from 'axios'

    export default {
        name: 'the-content-result-edit',
        components: {},
        props: {
            id: {
                required: false,
                default: null
            },

        },
        data: function () {
            return {
                formData: {},
                isWaiting: false,
                results:{
                    lenght:null
                }
            }
        },

        created: function () {
            let self = this;
            self.isWaiting = true;
            axios.get('/api/result/' + this.id, {}).then((response) => {
                this.formData = response.data;
                this.results = JSON.parse(response.data.results);
console.log(this.length);
            }).then((response) => {
                self.isWaiting = false;
            });
        },
        methods: {},
    }
</script>
