<template>
    <section class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-bold">Home</h1>
        <h2 class="text-3xl pt-2">
            HeadlessUI components
        </h2>
        <DropdownMenu/>
    </section>
</template>

<script>
import AppLayout from "../Layouts/AppLayout";
import DropdownMenu from "../Components/DropdownMenu";

export default {
    name: "Welcome",
    components: {DropdownMenu},
    layout: AppLayout,
}
</script>

<style scoped>

</style>
