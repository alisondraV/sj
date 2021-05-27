<template>
    <div>
        <div class="w-1/3 md:w-1/4 p-4 mx-auto lg:mx-0">
            <img :src="require(`@assets/${image}`)" width="100px" alt="Why us?">
        </div>
        <div class="lg:w-3/4 md:px-4 py-2 mx-auto lg:mx-0 text-center lg:text-left">
            <p class="text-white text-xl md:text-2xl py-2">{{ title }}</p>
            <p class="text-white">{{ description }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {type: String},
        description: {type: String},
        image: {type: String}
    }
}
</script>
