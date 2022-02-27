<template>
    <FullScreenWithImage
        :image="'https://images.unsplash.com/photo-1516490441364-4d611447d0f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'">
        <p class="text-sm font-semibold text-black text-opacity-50 tracking-wide uppercase">
            Coming soon
        </p>
        <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">
            Great things are coming, just wait!
        </h1>
        <p class="mt-2 text-lg font-medium text-white text-opacity-50">
            Check back soon for updates.
        </p>
    </FullScreenWithImage>
</template>

<script setup>
import FullScreenWithImage from "@/Components/Marketing/Feedback/FullScreenWithImage";
</script>

<script>
export default {
    layout: null,
}
</script>
