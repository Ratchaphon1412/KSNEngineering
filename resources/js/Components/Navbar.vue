<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
        <!-- navbar -->
        <div class="bg-gray-100">
        <div class="container mx-auto sm:flex sm:flex-row sm:justify-center sm:items-center bg-center">
            <!-- logo image -->
            <div class="mr-[4%]">
                <img :src="'../storage/image/logo.png'" 
                    alt="KSNlogo" class="w-[60px]">
            </div>
    
            <!-- search -->
            <div class="mr-[4%]">

                <div class="text-sm font-medium text-center text-gray-500 border-gray-200">
                    <ul class="flex -mb-px">
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">หน้าหลัก</a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">เกี่ยวกับเรา</a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">บริการ</a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">สินค้า</a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">เครนโรงงาน</a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">ผลงานของเรา</a>
                        </li>
                        <li class="mr-2">
                            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">ติดต่อเรา</a>
                        </li>
                    </ul>
                </div>

            </div>
            
            <!-- login and register -->
            <div v-if="canLogin" class="p-6 text-center z-10">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>
    
                <template v-else>
                    <Link :href="route('login')" class="font-semibold p-5 rounded-full bg-[#03045E] text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">เข้าสู่ระบบ</Link>
    
                    <!-- <Link v-if="canRegister" :href="route('register')" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link> -->
                </template>
            </div>
        </div>
    </div>
        
    
</template>