<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
    import HeaderComponent from './components/HeaderComponent.vue'
    import FooterComponent from './components/FooterComponent.vue'
    export default {
        components: {
            HeaderComponent,
            FooterComponent
        }
    }
</script>

<style lang="css">
    body {
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    overflow-x: hidden;
    }
    .main_header_area {
    height: 150px;
    padding-top: 30px;
    }
</style>