<template>
    <div>
        <div>{{text}}</div>
        <div style="display: flex;">
        <div style="width: 40px;" v-for="index in 10" :key="index">
            <input type="radio" :id=index :value=index v-model="value" @change="updateInput">
            <label :for=index>{{index}}</label>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'radio-ten',
        props: {
            value: {
                default: null
            },
            text: {
                default: ''
            },
        },
        model: {
            prop: 'modelValue',
            event: 'change'
        },
        methods: {
            updateInput(e) {
                this.$emit('change', e.target.value);
            }
        }
    }
</script>