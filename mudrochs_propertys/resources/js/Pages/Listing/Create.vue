<template>
    <form @submit.prevent="create">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-2">
                <label class="label">Beds</label>
                <input v-model.number.trim="form.beds" type="text" class="input" />
                <InputError :errors="form.errors" field="beds" />

            </div>

            <div class="col-span-2">
                <label class="label">Baths</label>
                <input v-model.number="form.baths" type="text" class="input" />
                <InputError :errors="form.errors" field="baths" />

            </div>

            <div class="col-span-2">
                <label class="label">Area</label>
                <input v-model.number="form.area" type="text" class="input" />
                <InputError :errors="form.errors" field="area" />
            </div>

            <div class="col-span-4">
                <label class="label">City</label>
                <input v-model="form.city" type="text" class="input" />
                <InputError :errors="form.errors" field="city" />

            </div>

            <div class="col-span-2">
                <label class="label">Post Code</label>
                <input v-model.number="form.post_code" type="text" class="input" />
                <InputError :errors="form.errors" field="post_code" />

            </div>

            <div class="col-span-4">
                <label class="label">Street</label>
                <input v-model="form.street" type="text" class="input" />
                <InputError :errors="form.errors" field="street" />

            </div>

            <div class="col-span-2">
                <label class="label">Street Number</label>
                <input v-model="form.street_number" type="text" class="input" />
                <InputError :errors="form.errors" field="street_number" />
            </div>

            <div class="col-span-6">
                <label class="label">Price</label>
                <input v-model.number="form.price" type="text" class="input" />
                <InputError :errors="form.errors" field="price" />
            </div>

            <div class="col-span-6">
                <button type="submit" class="btn-primary">Create</button>
            </div>
        </div>

    </form>

</template>
<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '../../Components/UI/InputError.vue'

const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: '',
    post_code: '',
    street: '',
    street_number: '',
    price: 0,
})

const create = () => form.post('/listing')

</script>
