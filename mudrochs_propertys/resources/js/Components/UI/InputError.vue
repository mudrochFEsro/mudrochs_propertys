<template>
    <div class="input-error" v-if="errorMessage">
        {{ errorMessage }}
    </div>
</template>

<script setup>
import { ref, watchEffect } from 'vue';

const props = defineProps({
    errors: Object, 
    field: String   
});
const errorMessage = ref('');

watchEffect(() => {
    errorMessage.value = props.errors[props.field] || ''; 
});
</script>


