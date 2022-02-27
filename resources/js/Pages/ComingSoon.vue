<template>
    <Head title="Coming Soon" />
    <FullScreenWithImage
        :image="'https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'">
        <p class="text-md font-semibold text-sky-500 tracking-wide uppercase">
            Great things are coming, just wait!
        </p>
        <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">
            Coming soon
        </h1>
    </FullScreenWithImage>
</template>

<script setup>
import {Head} from "@inertiajs/inertia-vue3";
import FullScreenWithImage from "@/Components/Marketing/Feedback/FullScreenWithImage";
</script>

<script>
export default {
    layout: null,
}
</script>
