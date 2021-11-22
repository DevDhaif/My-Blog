<template >
<div class="bg-blue-400 w-32 h-32 rounded-full absolute ">

    <h1 class="text-red-500 relative mt-20 ">{{ greeting }}</h1>
</div>
</template>
<script>
export default {
    setup: () => ({
        greeting: 'Hello World from Vue 3!'
    })
}
</script>
