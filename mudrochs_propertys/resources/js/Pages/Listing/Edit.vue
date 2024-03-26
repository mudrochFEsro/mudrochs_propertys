<template>
    <form @submit.prevent="update">
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
                <button type="submit" class="btn-primary">Edit</button>
            </div>
        </div>

    </form>

</template>
<script setup>
import { useForm } from '@inertiajs/vue3';
import InputError from '../../Components/UI/InputError.vue'
const props = defineProps({
    listing: Object
})

const form = useForm({
    beds: props.listing.beds,
    baths: props.listing.baths,
    area: props.listing.area,
    city: props.listing.city,
    post_code: props.listing.post_code,
    street: props.listing.street,
    street_number: props.listing.street_number,
    price: props.listing.price,
})

const update = () => form.put(`/listing/${props.listing.id}`)

</script>

<style scoped></style>