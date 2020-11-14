<template>
    <div class="bg-black flex">
        <div class="flex-1 flex flex-row items-center">
            <img class="w-20 mx-3" src="@assets/Logo.png"/>
            <a href="tel:12266008629" class="text-white">+1 (226) 600-86-29</a>
        </div>
        <div class="flex-1 flex justify-between items-center mr-8">
            <a
                v-for="item in items"
                :href="item.href"
                class="rounded p-2 text-white cursor-pointer hover:bg-gray-700"
            >
                {{ item.title }}
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        drawer: false,
        items: [
            { href: '#about', title: 'About Us' },
            { href: '#why', title: 'Why Us?' },
            { href: '#works', title: 'Our Works' },
            { href: '#contact', title: 'Contact Us' }
        ]
    })
}
</script>
