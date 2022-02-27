<template>
    <main class="min-h-full bg-cover bg-top sm:bg-top" :style="`background-image: url(${image})`">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-48">
            <slot></slot>
        </div>
    </main>
</template>

<script setup>
defineProps({
    image: String,
})
</script>

<style scoped>

</style>
