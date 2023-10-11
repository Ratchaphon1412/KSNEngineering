<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import HeroSection from "@/Sections/Home/Hero.vue";
import PartnerSection from "@/Sections/Home/Partner.vue";
import WhatWeDoSection from "@/Sections/Home/WhatWeDo.vue";
import CompanySection from "@/Sections/Home/Company.vue";
import Comments from "@/Sections/Home/Comments.vue";
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
        <WhatWeDoSection />
        <CompanySection />
        <Comments />
    </AppLayout>
</template>

<style scoped></style>
