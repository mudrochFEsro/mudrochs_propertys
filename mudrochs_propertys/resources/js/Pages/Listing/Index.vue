<template>
    <div v-if="user" class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
        <Listing v-for="listing in listings" :key="listing.id" :listing="listing" />
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3'
import Listing from '@/Pages/Listing/Index/Components/Listing.vue'
defineProps({
    listings: Array
});

const page = usePage();

const user = computed(
    () => page.props.user
)
</script>
