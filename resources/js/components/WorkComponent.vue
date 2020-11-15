<template>
    <table class="pa-3 align-content-center" style="width: 80vw;">
        <tr>
            <td class="tdImage">
                <img :src="require(`@assets/${image}`)" width="65%" style="border-radius: 20px; box-shadow: 10px 10px black;">
            </td>
        </tr>
        <tr>
            <td class="pa-4" colspan="3">
                <div class="fontSubHeading">{{ title }}</div>
                <div class="fontText">{{ description }}</div>
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
