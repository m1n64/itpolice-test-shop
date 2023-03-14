<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

</script>

<template>
    <div class="w-full flex py-4 px-2 bg-gray-800 text-xl text-white justify-between">
        <div>
            <Link :href="route('welcome')">
                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-200" />
            </Link>
        </div>
        <div class="flex">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-200 underline"
            >
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-200 underline">Log in</Link>

                <Link
                    :href="route('register')"
                    class="ml-4 text-sm text-gray-200 underline"
                >
                    Register
                </Link>
            </template>
        </div>
    </div>

    <div class="flex justify-between">
        <Link :href="route('catalog', {slug: category.slug})" v-for="category in $page.props.categories" class="border text-center cursor-pointer border-solid hover:bg-gray-300 border-gray-300 px-6 py-3 w-full">
            {{ category.name }}
        </Link>
    </div>
</template>

