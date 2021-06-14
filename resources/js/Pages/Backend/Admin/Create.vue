<template>
    <div>
        <form @submit.prevent="store" class="bg-gray-200 py-4 px-4 rounded-lg mx-5 my-5">
            <label for="" class="flex">
                name:
                <input type="text" v-model="form.name">
                <div v-if="form.errors.name">{{ form.errors.name }}</div>
            </label>
            <label for="" class="flex">
                email:
                <input type="email" v-model="form.email">
                <div v-if="form.errors.email">{{ form.errors.email }}</div>
            </label>
            <label for="" class="flex">
                password:
                <input type="password" v-model="form.password">
                <div v-if="form.errors.password">{{ form.errors.password }}</div>
            </label>
            <label for="" class="flex">
                password confirmation
                <input type="password" v-model="form.password_confirmation">
                <div v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</div>
            </label>
            <label for="" class="flex">
                role
                <select class="w-full" v-model="form.role" v-for="role in roles">
                    <option disabled value="">select option</option>
                    <option :value="role.id">{{role.name}}</option>
                </select>
                <div v-if="form.errors.role">{{ form.errors.role }}</div>
            </label>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
    import { useForm } from '@inertiajs/inertia-vue3'
    export default {
        name: "Create",
        data () {
            return {
                form: this.$inertia.form({
                name:null,
                email:null,
                password:null,
                    password_confirmation:null,
                role:null,
            })
            }
          },
        props: {
            roles: Object
        },

        methods: {
                store() {
                    this.form.post(this.route('backend.admins.store'))
                },
        }

    }
</script>

<style scoped>

</style>
