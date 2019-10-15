<template>
    <div>
        <form v-on:submit.prevent="submit">
            <div>Анкета сотрудника сети пекарен «Румяный каравай»</div>
            <div>
                Уважаемый коллега! Просим Вас ответить на ряд вопросов, касающихся Вашей работы. Опрос
                проводится анонимно. Руководству пекарен важно мнение сотрудников для более объективной
                оценки организации и условий Вашего труда и его оплаты. Заранее благодарим.
            </div>
            <div>
                <div class="form-group" style="width: 300px;">
                    <label>Город</label>
                    <input v-model="city" type="text" class="form-control" required/>
                </div>
                <div class="form-group" style="width: 300px;">
                    <label>№ Пекарни</label>
                    <input v-model="bakery" type="number" class="form-control" required/>
                </div>
            </div>
            <ol>
                <li>
                    {{formData.q1.text}}
                    <div>
                        <input type="radio" id="q1.1" value="от 21- 35 лет" v-model="formData.q1.a">
                        <label for="q1.1">от 21- 35 лет</label>
                        <br>
                        <input type="radio" id="q1.2" value="от 35- 55 лет" v-model="formData.q1.a">
                        <label for="q1.2">от 35- 55 лет</label>
                        <br>
                        <input type="radio" id="q1.3" value="от 55" v-model="formData.q1.a">
                        <label for="q1.3">от 55</label>
                        <br>
                    </div>
                </li>

                <li>
                    {{formData.q2.text}}
                    <div>
                        <input type="radio" id="q2.1" value="Менее года" v-model="formData.q2.a">
                        <label for="q2.1">Менее года</label>
                        <br>
                        <input type="radio" id="q2.2" value="1-2 года" v-model="formData.q2.a">
                        <label for="q2.2">1-2 года</label>
                        <br>
                        <input type="radio" id="q2.3" value="Более двух лет" v-model="formData.q2.a">
                        <label for="q2.3">Более двух лет</label>
                        <br>
                    </div>
                </li>

                <li>
                    <radio-ten v-model="formData.q31.a" :value="formData.q31.a"
                               :text="formData.q31.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q32.a" :value="formData.q32.a"
                               :text="formData.q32.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q33.a" :value="formData.q33.a"
                               :text="formData.q33.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q34.a" :value="formData.q34.a"
                               :text="formData.q34.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q35.a" :value="formData.q35.a"
                               :text="formData.q35.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q36.a" :value="formData.q36.a"
                               :text="formData.q36.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q37.a" :value="formData.q37.a"
                               :text="formData.q37.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q38.a" :value="formData.q38.a"
                               :text="formData.q38.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q39.a" :value="formData.q39.a"
                               :text="formData.q39.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q310.a" :value="formData.q310.a"
                               :text="formData.q310.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q311.a" :value="formData.q311.a"
                               :text="formData.q311.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q312.a" :value="formData.q312.a"
                               :text="formData.q312.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q313.a" :value="formData.q313.a"
                               :text="formData.q313.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q314.a" :value="formData.q314.a"
                               :text="formData.q314.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q315.a" :value="formData.q315.a"
                               :text="formData.q315.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q316.a" :value="formData.q316.a"
                               :text="formData.q316.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q317.a" :value="formData.q317.a"
                               :text="formData.q317.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q318.a" :value="formData.q318.a"
                               :text="formData.q318.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q319.a" :value="formData.q319.a"
                               :text="formData.q319.text"
                    ></radio-ten>
                </li>
                <li>
                    <radio-ten v-model="formData.q320.a" :value="formData.q320.a"
                               :text="formData.q320.text"
                    ></radio-ten>
                </li>

                <li>
                    {{formData.q4.text}}
                    <div>
                        <input type="radio" id="q4.1" value="ДА" v-model="formData.q4">
                        <label for="q4.1">ДА</label>
                        <br>
                        <input type="radio" id="q4.2" value="НЕТ" v-model="formData.q4">
                        <label for="q4.2">НЕТ</label>
                    </div>
                </li>
            </ol>

            <div class="form-group" style="width: 300px;">
                <label>{{formData.q5.text}}</label>
                <textarea v-model="formData.q5.a" class="form__control" rows="5" style="width: 600px;"></textarea>
            </div>

            <button class="btn btn-primary">Отправить</button>
        </form>
    </div>
</template>
<script>
    import RadioTen from './RadioTen';
    import axios from 'axios'

    export default {
        name: 'the-content-quiz',
        components: {
            RadioTen,
        },
        data: function () {
            return {
                city:'',
                bakery:'',
                formData: {
                    q1: {
                        text: 'Отметьте Ваш возраст'
                    },
                    q2: {
                        text: 'Как долго вы работаете в компании'
                    },
                    q31: {
                        text: 'Отметьте Ваш возраст'
                    },
                    q32: {
                        text: 'Мое рабочее место полностью оборудовано и безопасно, позволяет мне работать комфортно.'
                    },
                    q33: {
                        text: 'Насколько важны для Вас общность интересов и хорошие отношения внутри коллектива.'
                    },
                    q34: {
                        text: 'Наша пекарня – одна дружная рабочая группа.'
                    },
                    q35: {
                        text: 'Насколько важны для Вас отношения с управляющим.'
                    },
                    q36: {
                        text: 'Задачи со стороны руководителя ставятся чётко, осуществляется регулярная обратная связь и\n' +
                        'ведется открытое обсуждение с руководителем проблем и сложностей.'
                    },
                    q37: {
                        text: 'Насколько важна для Вас справедливая и понятная оплата труда.'
                    },
                    q38: {
                        text: 'Я получаю стабильную и достойную зарплату.'
                    },
                    q39: {
                        text: 'Насколько важно для Вас понимание перспектив развития сети наших пекарен.'
                    },
                    q310: {
                        text: 'У меня достаточно информации о том, что происходит в нашей компании.'
                    },
                    q311: {
                        text: 'Насколько важна для Вас самостоятельность в работе.'
                    },
                    q312: {
                        text: 'Моя работа сложная, интересная, с высокой степенью ответственности.'
                    },
                    q313: {
                        text: 'Насколько для Вас важно признание важности Вашей работы коллегами и управляющим.'
                    },
                    q314: {
                        text: 'Ко мне с уважением относятся коллеги и с одобрением управляющий.'
                    },
                    q315: {
                        text: 'Насколько важна для Вас возможность профессионального роста.'
                    },
                    q316: {
                        text: 'Я вижу в своей работе возможность приобретения новых знаний, навыков и возможность\n' +
                        'карьерного роста.'
                    },
                    q317: {
                        text: 'Насколько важно для Вас чёткое и своевременное выполнение обязательств компании перед\n' +
                        'сотрудниками.'
                    },
                    q318: {
                        text: 'Моя работа стабильная и я уверен в завтрашнем дне.'
                    },
                    q319: {
                        text: 'Насколько важно для Вас наличие в компании корпоративных ценностей и традиций.'
                    },
                    q320: {
                        text: 'Мне нравится, как соблюдается корпоративная культура в наших пекарнях.'
                    },
                    q4: {
                        text: 'Порекомендуете ли Вы работу в сети наших пекарнях своим друзьям.'
                    },
                    q5: {
                        text: 'Напишите, почему Вам нравится работать в компании “Румяный Каравай».'
                    },
                },

            }
        },
        methods: {
            submit: function () {

                let self=this;
                let output;
                output={
                    results:JSON.stringify(this.formData),
                    city:self.city,
                    bakery:self.bakery
                };
                axios.post('/api/results/add', output).then((response) => {
                    this.$router.push({name: 'the-content-results'});
                });
            }
        },
    }
</script>
