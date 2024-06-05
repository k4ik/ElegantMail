<template>
    <button @click.prevent="back"><</button>
</template>

<script>
export default {
    methods: {
        back() {
            this.$router.push("/")
        }
    }
}
</script>

<style lang="scss" scoped>
@import "../assets/scss/variables";

    button {
        border: 1px solid black;
        font-size: 22px;
        width: 30px;
        height: 30px;
        background-color: $rosa-escuro;
        border-radius: 50%;
        position: fixed;
        left: 5%;
        top: 5%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>