<template>
    <div>
        <ConfirmationComponent v-if="showConfirmation" />

        <main>
            <form @submit.prevent="submitForm">

                <div class="header">
                    <p>Você gostaria de se identificar?</p>
                    <input type="text" placeholder="Digite seu nome ou apelido" v-model="name" required>
                </div>
                <div class="formDiv">
                    <label for="">Email</label>
                    <input type="email" name="" id="" placeholder="Digite o email dele ou dela" v-model="email" required>
                    <label for="">Surpreenda</label>
                    <textarea name="" id="" placeholder="Solte o verbo para seu/sua amado(a)" v-model="message" required></textarea>
                    <button>Enviar Correio</button>
                </div>
            </form>
        </main>
    </div>
</template>

<script>
import ConfirmationComponent from '../Confirmation/ConfirmationComponent.vue';
export default {
    components: {
        ConfirmationComponent
    },
    data() {
        return {
            showConfirmation: false,
            name: "",
            email: "",
            message: ""
        }
    },
    methods: {
        submitForm() {
            this.showConfirmation = true;

            setTimeout(() => {
                this.showConfirmation = false;
            }, 3000);

            this.name = ""
            this.email = ""
            this.message = ""
        }
    }
}
</script>

<style lang="scss" scoped>
@import "../../assets/scss/variables";

main {
    .header {
        background-color: $primary-color;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        padding: 40px 0;

        p {
            font-size: 22px;
            color: $second-color;
        }

        input {
            outline: none;
            border: 1px solid $primary-color;
            border-radius: 15px;
            max-width: 250px;
            width: 100%;
            padding: 10px;
        }
    }

    .formDiv {
        display: flex;
        flex-direction: column;
        gap: 5px;
        max-width: 500px;
        width: 100%;
        margin: 30px auto;
        padding: 0 20px;

        input, textarea {
            margin-bottom: 20px;
            border-radius: 15px;
            padding: 10px;
            border: 1px solid $primary-color;
            outline: none;
        }

        textarea {
            height: 200px;
        }

        button {
            background-color: $primary-color;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 15px;
            color: $second-color;
        }
    }
}
</style>