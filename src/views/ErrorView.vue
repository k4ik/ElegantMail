<template>
    <div class="container">
        <p class="title">Ocorreu um erro ao enviar seu correio</p>
        <div class="container-image">
            <img src="../assets/images/Logo.png" alt="logo" class="image1">
        </div>
    </div>
</template>

<script>
    export default {
        
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