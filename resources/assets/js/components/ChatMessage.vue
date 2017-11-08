<template>
    <div class="">
        <p>{{ message }}</p>
        <small>{{ user }}</small>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Example message text',
                user: 'John Doe'
            }
        }
    }
</script>
