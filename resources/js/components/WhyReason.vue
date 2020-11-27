<template>
    <div>
        <div class="pr-5 w-1/4 px-4 py-2">
            <img :src="require(`@assets/${image}`)" width="100px">
        </div>
        <div class="w-3/4 px-4 py-2">
            <p class="text-white">{{ title }}</p>
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
