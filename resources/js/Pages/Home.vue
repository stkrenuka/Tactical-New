<script setup>
defineProps({
  message: String
})
</script>

<template>
    <h1>{{ message }}</h1>
    <button @click="$inertia.visit('/about')">Go to About Page</button>
    <button @click="$inertia.visit('/contact')">Go to Contact Page</button>
</template>
