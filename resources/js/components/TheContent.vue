<template>
    <div>
        <the-header></the-header>
        <div class="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>

    import router from 'vue-router'
    import axios from 'axios';
    import TheHeader from './TheHeader.vue';

    export default {

        components:
            {
                TheHeader,
            }

    }
</script>


