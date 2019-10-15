<template>
    <div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">
                    <div>Город</div>
                </th>
                <th scope="col">
                    <div>Пекарня</div>
                </th>
                <th scope="col">Операции</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="record in formData">
                <tr>
                    <td>{{record.id}}</td>
                    <td>{{record.city}}</td>
                    <td>{{record.bakery}}</td>
                    <td>
                        <router-link class="btn btn-light"
                                     :to="{ name: 'the-content-results-edit', params: { id: record.id } }">
                            Смотреть
                        </router-link>
                        <!--<a class="btn btn-warning" @click.prevent="onClickDeleteRecord(record.id)">Удалить</a>-->
                    </td>


                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>
<script>
    import router from 'vue-router'
    import axios from 'axios'

    export default {
        name: 'the-content-results',
        components: {

        },

        data: function () {
            return {
                formData:{},

            }
        },

        created: function () {
            let self=this;
            self.isWaiting = true;
            axios.get('/api/results', {
            }).then((response) => {
                this.formData=response.data;
            }).then((response) => {
                self.isWaiting = false;
            });
        },
        methods: {

        },
    }
</script>
