<template>
    <div class="chat-composer">
        <input type="text" placeholder="Insert message" v-model="messageText" v-on:keyup.enter="sendMessage">
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: 'John Doe'
                })
                this.messageText = ''
            }
        }
    }
</script>

<style lang="css">
    .chat-composer {
        display: flex;
    }

    .chat-composer input {
        flex: 1 auto;
    }

    .chat-composer button {
        border-radius: 0;
    }
</style>
