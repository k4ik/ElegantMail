<template>
    <div>
        <header>
            <p>Você gostaria de se identificar?</p>
            <form>
                <input type="text" placeholder="Digite seu nome ou apelido">
            </form>
        </header>

        <main>
            <form>
                <label for="">Email</label>
                <input type="email" name="" id="" placeholder="Digite o email dele ou dela">
                <label for="">Surpreenda</label>
                <textarea name="" id="" placeholder="Solte o verbo para seu/sua amado(a)"></textarea>
            </form>
        </main>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
@import "../../assets/scss/variables";

header {
    background-color: $primary-color;
    height: 180px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 30px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;

    p {
        color: $second-color;
        font-size: 22px;
        text-align: center;
    }

    form {
        input {
            outline: none;
            border: none;
            padding: 10px;
            border-radius: 10px;
            width: 250px
        }
    }
}

main {
    padding: 40px 20px;
    background-color: $second-color;
    height: 100%;

    form {
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 10px;

        input,
        textarea {
            outline: none;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 15px;
            border: 1px solid $primary-color;
        }

        textarea {
            height: 200px;
        }
    }
}</style>