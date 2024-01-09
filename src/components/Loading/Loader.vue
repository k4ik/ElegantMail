<template>
    <div class="loader"></div>
</template>

<script>
    export default {
        name: "Loader"
    }
</script>

<style lang="scss" scoped>
    @import "../../assets/scss/variables";

    .loader {
        animation: is-rotation 1s infinite;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        border: 6px solid $grey;
        border-top-color: $primary-color;
    }

    @keyframes is-rotation{
        to {
            transform: rotate(1turn);
        }
    }
</style>