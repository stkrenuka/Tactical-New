<script setup>
defineProps({
  info: String
})
</script>

<template>
    <h1>{{ info }}</h1>
    <button @click="$inertia.visit('/')">Go to home Page</button>
    <button @click="$inertia.visit('/about')">Go to About Page</button>
</template>
