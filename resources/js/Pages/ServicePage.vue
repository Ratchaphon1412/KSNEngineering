<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AppLayout from '@/Layouts/AppLayout.vue';
import Container from '@/Components/Container.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})

</script>

<template>
    <AppLayout title="Home">
        <Container class="grid grid-cols-1 md:grid-cols-2 w-full md:h-[88vh]">
            <Container class="flex flex-col md:justify-center md:items-center md:order-none order-last">
                <div class="font-extrabold text-9xl my-10 text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-yellow-500" id="type">
                    KSN.
                </div>
                <div class="text-left text-red-500 indent-8 text-4xl mb-3" id="intro">
                    K.S.N. Engineering Company Limited was established in 1994 to carry out the business of promoting industry in Thailand. 
                </div>
            </Container>
            <img src="assets/images/crane-hero.jpg" alt="" class="hidden place-self-center rounded-xl md:block">
        </Container>

        <div class="container mx-auto flex justify-between my-12">
            <p class="text-3xl font-extrabold indent-10">Lorem</p>
        </div>
        <hr class="container mx-auto border border-2 border-black rounded-full">
        <!-- content -->
        <Container>
            <div class="flex flex-col md:flex-row justify-between my-12">
                <img src="assets/slide/crane.jpg" alt="" class="object-cover rounded-lg md:w-96">
                <div class="p-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iure illo cumque eius, odit aliquid unde eum esse. Quidem incidunt, illo itaque et cupiditate nesciunt. Deserunt, ab. Iure enim repellendus, perspiciatis velit facilis nulla eum, officia delectus tempora quia voluptas.
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between my-12">
                <div class="p-10 order-last md:order-none">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iure illo cumque eius, odit aliquid unde eum esse. Quidem incidunt, illo itaque et cupiditate nesciunt. Deserunt, ab. Iure enim repellendus, perspiciatis velit facilis nulla eum, officia delectus tempora quia voluptas.
                </div>
                <img src="assets/slide/keeping.jpg" alt="" class="object-cover rounded-lg md:w-96">
            </div>
            <p class="text-center my-12">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quam labore fugit soluta beatae harum, nostrum laborum quis animi necessitatibus.</p>
            <div class="grid md:grid-cols-3 gap-4 justify-stretch justify-items-stretch">
                <img src="assets/slide/prepare.jpg" alt="" class="rounded-lg">
                <img src="assets/slide/sendingProduct.jpg" alt="" class="rounded-lg">
                <img src="assets/slide/product.jpg" alt="" class="rounded-lg">
            </div>

        </Container>
    </AppLayout>
</template>

<style scoped>
#type{
    width: 4ch;
    animation: typing 1s steps(4), blink .5s step-end infinite alternate;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid;
}

@keyframes typing{
    from {
        width: 0
    }
}

@keyframes blink {
    50%{
        border-color: transparent
    }
}

#intro{
    animation: intro 1.5s;
}

@keyframes intro{
    0% {
    transform: translateY(25%);
  }
  100% {
    transform: translateY(0);
  }
}

</style>