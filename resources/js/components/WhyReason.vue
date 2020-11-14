<template>
    <table class="pa-3">
        <tr>
            <td><img :src="require(`@assets/${image}`)" width="90px"></td>
            <td>
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
