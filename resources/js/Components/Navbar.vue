<script setup>
import { Link } from '@inertiajs/vue3';

import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
    initFlowbite();
})

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

</script>

<template>
        <nav class="bg-white fixed w-full z-40 top-0 left-0 border-b border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <Link href="/" class="block">
                    <img :src="'../storage/image/logo.png'" class="w-[60px]" alt="KSNLogo">
                </Link>
                <div class="flex md:order-2">
                    <!-- login and register -->
                    <div v-if="canLogin" class="text-center">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>
            
                        <div v-else>
                            <!-- <Link :href="route('login')" class="font-medium text-sm p-5 rounded-full bg-[#03045E] text-white hover:text-gray-900 focus:outline focus:outline-2 md:mr-0">เข้าสู่ระบบ</Link> -->
                            <Link :herf="('login')" type="button" class="text-white bg-[#03045E] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center mr-3 md:mr-0">เข้าสู่ระบบ</Link>
                            
                            <!-- <Link v-if="canRegister" :href="route('register')" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link> -->
                        </div>
                    </div>

                    <!-- humberger -->
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-1 md:mt-0 md:border-0 md:bg-white">
                        <!-- <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a> -->
                        <li>
                            <Link href="/" :class="[$page.url === '/' ? 'block p-4 border-b-2 border-transparent rounded text-blue-600 hover:bg-yellow-500 md:hover:bg-transparent' : 'block p-4 border-b-2 border-transparent rounded md:hover:text-gray-600 md:hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent' ]">หน้าหลัก</Link>
                        </li>
                        <li>
                            <Link href="#" class="block p-4 border-b-2 border-transparent rounded hover:text-gray-600 hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent">
                                เกี่ยวกับเรา
                            </Link>
                        </li>
                        <li>
                            <Link href="/service-page" :class="[$page.url === '/service-page' ? 'block p-4 border-b-2 border-transparent rounded text-blue-600 hover:bg-yellow-500 md:hover:bg-transparent' : 'block p-4 border-b-2 border-transparent rounded hover:text-gray-600 hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent' ]">
                                บริการ
                            </Link>
                        </li>
                        <li>
                            <Link href="/product" :class="[$page.url === '/product' ? 'block p-4 border-b-2 border-transparent rounded text-blue-600 hover:bg-yellow-500 md:hover:bg-transparent' : 'block p-4 border-b-2 border-transparent rounded hover:text-gray-600 hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent' ]">
                                สินค้า
                            </Link>
                        </li>
                        <li>
                            <Link href="#" class="block p-4 border-transparent rounded hover:text-gray-600 hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent">
                                เครนโรงงาน
                            </Link>
                        </li>
                        <li>
                            <Link href="#" class="block p-4 border-transparent rounded hover:text-gray-600 hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent">
                                ผลงานของเรา
                            </Link>
                        </li>
                        <li>
                            <Link href="#" class="block p-4 border-transparent rounded hover:text-gray-600 hover:border-gray-300 hover:bg-yellow-500 md:hover:bg-transparent">
                                ติดต่อเรา
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="h-[100px]"></div>
</template>