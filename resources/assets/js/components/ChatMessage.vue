<template lang="html">
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <small>{{ message.user }}</small>
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>

<style type="text/css">
    
    .chat-message {
        padding: 1rem;
    }

    .chat-message > p {
        margin-bottom: .5rem;
    }

</style>