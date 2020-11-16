<template>
    <table class="p-3" style="width: 80vw;">
        <tr>
            <td class="flex justify-center">
                <img
                    :src="require(`@assets/${image}`)"
                    class="custom-image"
                    width="65%"
                >
            </td>
        </tr>
        <tr>
            <td class="p-6 mb-4 flex flex-col text-center" colspan="3">
                <div class="text-3xl">{{ title }}</div>
                <div class="text-lg">{{ description }}</div>
            </td>
        </tr>
    </table>
</template>

<script>
export default {
    props: {
        image: {type: String},
        title: {type: String},
        description: {type: String}
    }
}
</script>

<style>
.custom-image {
    border-radius: 20px;
    box-shadow: 10px 10px black;
}
</style>
