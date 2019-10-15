<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <router-link :to="{name: 'the-content-quiz'}" class="nav-link"><span class="menu__name">Опрос</span></router-link>
            <router-link :to="{name: 'the-content-results'}" class="nav-link"><span class="menu__name">Результаты</span></router-link>
        </nav>
    </div>
</template>
<script>
    export default {
        name: 'the-header',
    }

</script>
