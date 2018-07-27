<template lang="html">
    <div class="chat-log">
        <chat-messages v-for="(message, index) in messages" :message="message" :key="index"/>
        <div class="empty" v-show="messages.length === 0">
            nada
        </div>
    </div>
</template>
<script>
	export default {
		props: ["messages"]
	}
</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even) {
        background-color: #ccc;
    }

    .empty {
       padding: 1rem;
        text-align: center;
    }
</style>