<template>
    <div class="bg-red-300">
        <ul>
            <li>
                <inertia-link :href="route('backend.admins')">
                    admins
                </inertia-link>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "Dashboard"
    }
</script>

<style scoped>

</style>
