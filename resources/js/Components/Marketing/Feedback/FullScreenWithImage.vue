<template>
    <main class="relative min-h-full grid content-center bg-cover bg-top sm:bg-top" :style="`background-image: url(${image})`">
        <div class="absolute inset-0 bg-gray-900/80 mix-blend-multiply"></div>
        <div class="z-10 flex flex-col max-w-7xl mx-auto px-4 py-16 text-center sm:px-6 lg:px-8">
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
