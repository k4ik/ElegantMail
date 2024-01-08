<template>
    <div class="container">
        <p>Seu correio foi enviado com sucesso</p>
        <img src="../../assets/images/check-icon.svg" alt="">
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
    @import "../../assets/scss/variables";
    .container {
        height: 90vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: fixed;
        bottom: 0;

        p {
            color: $grey;
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }
    }
</style>