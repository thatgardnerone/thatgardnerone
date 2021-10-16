<template>
    <h1 class="text-4xl font-bold">Users</h1>

    <div style="margin-top: 50rem" class="mb-10">
        <p>
            The current time is {{ time }}.
        </p>
        <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll>Refresh</Link>
    </div>
</template>

<script>
import AppLayout from "../Layouts/AppLayout";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    name: "Users",
    layout: AppLayout,
    components: {
        Link,
    },
    props: {
        time: String,
    },
}
</script>

<style scoped>

</style>
