<template>
    <AppSection class="bg-gray-200">
        <header class="flex justify-between">
            <Logo/>
            <Nav/>
        </header>
    </AppSection>

    <AppSection class="bg-gray-100">
        <main>
            <slot/>
        </main>
    </AppSection>

    <AppSection class="bg-gray-300">
        <footer>
            <p class="text-center">
                &copy; Copyright {{ year }} Jamie Gardner
            </p>
        </footer>
    </AppSection>
</template>

<script>
import Nav from "../Components/Nav";
import Logo from "../Components/Logo";
import AppSection from "../Components/AppSection";

export default {
    name: "AppLayout",
    components: {
        AppSection,
        Logo,
        Nav
    },
    computed: {
        year() {
            return new Date().getFullYear()
        }
    }
}
</script>

<style scoped>

</style>
