<template>
    <div>
        <div v-for="admin in admins.data">
            <ul>
                <li>{{admin.name}}</li>
            </ul>
        </div>

        <inertia-link class="bg-red-500" :href="route('backend.admins.create')">
            create new admin
        </inertia-link>
    </div>
</template>

<script>
    export default {
        name: "Index",
        props: {
            admins: Object
        }
    }
</script>

<style scoped>

</style>
