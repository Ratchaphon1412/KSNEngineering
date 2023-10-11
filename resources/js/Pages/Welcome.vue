<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import HeroSection from "@/Sections/Home/Hero.vue";
import PartnerSection from "@/Sections/Home/Partner.vue";
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <AppLayout title="Home">
        <HeroSection />
        <PartnerSection />
    </AppLayout>
</template>

<style scoped></style>
