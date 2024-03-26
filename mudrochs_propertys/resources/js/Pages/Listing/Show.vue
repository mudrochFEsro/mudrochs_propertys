<template>
    <div class="flex flex-col-reverse md:grid md:grid-cols-12 gap-4">
        <Box class="md:col-span-7 flex items-center w-full">
            <div class="w-full text-center font-medium text-gray-500">No images</div>
        </Box>
        <div class="md:col-span-5 flex flex-col gap-4">
            <Box>
                <template #header>
                    Basic Info
                </template>
                <Price :price="listing.price" class="text-2xl font-bold" />
                <ListingSpace :listing="listing" class="text-lg" />
                <ListingAdress :listing="listing" class="text-gray-500" />
            </Box>
            <Box>
                <template #header>
                    Monthly Payment
                </template>
                <div>
                    <label class="label">Interest rate (2.5%)</label>
                    <input type="range" min="0.1" max="30" step="0.1"
                        class="w-full h-4 bg-gray rounded-lg appearance-none cursor-pointer dark:bg-gray-700" />
                    <label class="label">Duration (25 years)</label>
                    <input type="range" min="3" max="35" step="1"
                        class="w-full h-4 bg-gray rounded-lg appearance-none cursor-pointer dark:bg-gray-700" />
                </div>
                <div class="">

                </div> 
            </Box>
        </div>
    </div>
</template>
<script setup>
import ListingAdress from '@/Components/ListingAdress.vue';
import ListingSpace from '@/Components/UI/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
defineProps({
    listing: Object
})
</script>