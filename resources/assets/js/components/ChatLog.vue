<template>
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [
                    {
                        message: 'Hello',
                        user: 'John Doe'
                    },
                    {
                        message: 'Hellol',
                        user: 'John Does'
                    }
                ]
            }
        }
    }
</script>
