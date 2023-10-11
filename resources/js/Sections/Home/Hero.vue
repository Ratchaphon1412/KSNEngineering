<script setup>
import Container from "@/Components/Container.vue";
</script>

<template>
    <section
        class="w-full h-screen-1/2 overflow-y-hidden bg-cover bg-fixed bg-bottom bg-no-repeat shadow-lg"
        style="background-image: url('assets/images/crane-hero.jpg')"
    >
        <div class="bg-black bg-opacity-20 w-full h-full">
            <Container>
                <div class="relative pt-36 pb-36 ml-auto">
                    <div class="lg:w-2/3 text-center mx-auto">
                        <h1
                            class="text-gray-900 font-bold text-5xl md:text-6xl xl:text-7xl"
                        >
                            Shaping a world with
                            <span class="text-primary">reimagination.</span>
                        </h1>
                        <p class="mt-8 text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Odio incidunt nam itaque sed eius modi error
                            totam sit illum. Voluptas doloribus asperiores
                            quaerat aperiam. Quidem harum omnis beatae ipsum
                            soluta!
                        </p>
                        <div
                            class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6"
                        >
                            <a
                                href="#"
                                class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                            >
                                <span
                                    class="relative text-base font-semibold text-black"
                                    >Get started</span
                                >
                            </a>
                            <a
                                href="#"
                                class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-primary/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max"
                            >
                                <span
                                    class="relative text-base font-semibold text-primary dark:text-white"
                                    >Learn more</span
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </Container>
        </div>
    </section>
</template>
