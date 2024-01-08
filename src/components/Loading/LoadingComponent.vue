<template>
    <div class="container">
        <img src="../../assets/images/logo.png" alt="logo">
        <Loader/>
    </div>
</template>

<script>
    import Loader from "./Loader.vue";

    export default {
        components: {
            Loader
        }
    }
</script>

<style lang="scss" scoped>
    .container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;

        img {
            width: 45%;
        }
    }
</style>