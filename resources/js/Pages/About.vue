<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
  info: String
})
</script>

<template>
    <h1>{{ info }}</h1>
    <button @click="$inertia.visit('/')">Go to home Page</button>
    <button @click="$inertia.visit('/contact')">Go to Contact Page</button>
   <button> <Link :href="route('home')">Home</Link></button>
</template>
