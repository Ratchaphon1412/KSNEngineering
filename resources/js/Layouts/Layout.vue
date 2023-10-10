<script setup>
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

</script>

<template>
    <Navbar :can-login="canLogin" :can-register="canRegister"/>
    <div>
        <slot/>
    </div>
    <Footer/>
</template>