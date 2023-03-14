<script setup>
defineProps({
    headText: String,
    headDesc: String,
});
</script>

<template>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <h2 class="text-lg font-medium text-gray-900">{{ headText }}</h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ headDesc }}
            </p>
            <slot/>
        </div>
    </div>
</template>

