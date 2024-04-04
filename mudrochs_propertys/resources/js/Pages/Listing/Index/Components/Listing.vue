<template>
    <Box>
        <div>
            <Link :href="route('listing.show', listing.id)">
            <div class="flex items-center gap-1">
                <Price :price="listing.price" class="text-2xl font-bold" />
                <div class="text-xs text-gray-500">
                    <Price :price="monthlyPayment" /> pm
                </div>
            </div>
            <ListingSpace :listing="listing" class="text-lg" />
            <ListingAdress :listing="listing" class="text-gray-500" />
            </Link>
        </div>
        <div>
            <Link :href="route('listing.edit', listing.id)">Edit</Link>
        </div>
        <div>
            <Link :href="route('listing.destroy', listing.id)" method="DELETE" as="button">Delete</Link>
        </div>
    </Box>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import ListingAdress from '@/Components/ListingAdress.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import ListingSpace from '@/Components/UI/ListingSpace.vue';
import { useMonthlyPayment } from '@/Composables/useMonthlyPayments'

const props = defineProps({ listing: Object })
const { monthlyPayment } = useMonthlyPayment(props.listing.price, 2.5, 25)

</script>