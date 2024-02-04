<template>
    <main>
        <form method="post" class="form" @submit.prevent="sendMail">
            <header class="header-form">
                <label for="name" class="label-header">Você gostaria de se identificar?</label>
                <input type="text" name="name" placeholder="Digite seu nome ou apelido" class="input-header">
            </header>

            <div class="content-form">
                <label for="email" class="label-form">Email</label>
                <input type="email" name="email" placeholder="Digite o email dele ou dela" class="input-form">
                <label for="message" class="label-form">Surpreenda</label>
                <textarea name="message" class="input-form" placeholder="Solte o verbo para seu/sua amado(a)" rows="6"></textarea>
                <button type="submit" class="submit-button">ENVIAR CORREIO</button>
            </div>
        </form>
    </main>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                email: '',
                message: ''
            }
        },
        methods: {
            sendMail() {
                const formData = {
                    nome: this.nome,
                    email: this.email,
                    mensagem: this.mensagem
                };

                fetch('../../backend/send_mail.php', {
                    method: 'POST',
                    headers: {
                        'ContentType': 'application/json'
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => {
                    if (response.ok) {
                        console.log("email enviado com sucesso!")
                    } else {
                        console.log("erro ao enviar o email")
                    }
                })
                .catch(error => {
                    console.log("erro ao enviar o email: ", error)
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import '../assets/scss/variables';

    form {

        
        width: 100%;

        .header-form, .content-form {
            display: flex;
            flex-direction: column;
        }

        .header-form {
            padding: 0 10px;
            background-color: $rosa-escuro;
            width: 100%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 10px;

            .label-header, .input-header {
                max-width: 350px;
                width: 100%;
            }

            .label-header {
                color: $branco;
                font-size: 26px;
                font-weight: bold;

                @media screen and (max-width: 365px) {
                    font-size: 20px;
                }
            }

            .input-header {
                border: none;
                outline: none;
                padding: 5px 10px;
                border-radius: 12px;
                &::placeholder {
                    color: $cinza;
                }
            }
        }

        .content-form {
            padding: 0 10px;
            margin-top: 80px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            .label-form, .input-form, .submit-button {
                max-width: 350px;
                width: 100%;
            }

            .label-form {
                margin-bottom: 5px;
                color: $cinza-escuro;
                font-weight: 600;
                font-size: 18px;
            }

            .input-form {
                margin-bottom: 20px;
                border: 1px solid $rosa-escuro;
                padding: 5px 10px;
                border-radius: 12px;
                &:focus {
                    outline: 1px solid $rosa-escuro;
                }
            }

            .submit-button {
                color: $branco;
                background-color: $rosa-escuro;                
                padding: 10px;
                border: none;
                border-radius: 12px;
                font-weight: bold;

                &:hover {
                    transition: .3s;
                    background-color: $rosa-claro;
                }

                &:focus {
                    outline: 1px solid $rosa-escuro;
                }
            }
        }
    }
</style>