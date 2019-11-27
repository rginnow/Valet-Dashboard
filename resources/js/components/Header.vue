<template>
    <header class="flex items-center bg-gray-200 h-24 px-6">
        <div class="flex items-center w-full">
            <div class="flex items-center flex-shrink-0">
                <img class="w-64 mr-2" src="images/svg/logo.svg">
                <!-- <h1 class="text-3xl font-light tracking-tight flex-shrink">Valet Dashboard</h1> -->
            </div>
            <nav class="flex flex-grow items-center justify-end">
                <router-link :to="{name: 'home'}" class="nav-link hover:text-primary transition-all relative ml-1 py-1 px-2">
                    <i class="fas fa-home mr-2"></i> Home
                </router-link>
                <router-link :to="{name: 'settings'}" class="nav-link hover:text-primary transition-all relative ml-1 py-1 px-2">
                    <i class="fas fa-cog mr-2"></i> Settings
                </router-link>
            </nav>
        </div>
    </header>
</template>

<script>
    export default {
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
