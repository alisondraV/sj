<template>
    <table class="table-fixed">
        <tr>
            <td class="pr-5 w-1/4 px-4 py-2">
                <img :src="require(`@assets/${image}`)" width="100px">
            </td>
            <td class="w-3/4 px-4 py-2">
                <div class="text-white">{{ title }}</div>
                <div class="text-white">{{ description }}</div>
            </td>
        </tr>
    </table>
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
