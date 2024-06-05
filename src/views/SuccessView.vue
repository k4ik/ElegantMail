<template>
    <BackButton />
    <div class="container">
        <p class="title">Seu correio foi enviado  com sucesso</p>
        <div class="container-image">
            <img src="../assets/images/Logo.png" alt="logo" class="image1">
            <img src="../assets/images/lollipop.png" alt="lollipop" class="image2">
        </div>
    </div>
</template>

<script>
import BackButton from "../components/BackButton.vue";

export default {
    components: {
        BackButton
    }
}
</script>

<style lang="scss" scoped>
    @import '../assets/scss/variables';

    .container {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 15px;

        .title {
            font-size: 28px;
            color: $rosa-escuro;
            font-weight: bold;
            text-align: center;
        }

        .container-image {
            display: flex;
            align-items: center;
            gap: 20px;

            .image1 {
                width: 80px;
            }

            .image2 {
                width: 60px;
            }
        }
    }
</style>