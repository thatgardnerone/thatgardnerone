<template>
    <nav>
        <ul class="flex list-none space-x-3">
            <li>
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post" as="button">Log Out</NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>
import NavLink from "./NavLink";

export default {
    name: "Nav",
    components: {
        NavLink,
    }
}
</script>

<style scoped>

</style>
