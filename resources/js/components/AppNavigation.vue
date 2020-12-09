<template>
    <nav class="bg-black flex p-3 fixed w-screen">
        <div class="flex-1 flex flex-row items-center md:ml-12">
            <img class="w-20 mx-4" src="@assets/Logo.png"/>
            <a href="tel:12266008629" class="text-white text-lg">+1 (226) 600-86-29</a>
        </div>
        <div class="md:flex md:items-center">
            <div class="cursor-pointer block md:hidden" @click="toggleMenu">
                <img class="w-8 m-8" src="@assets/Menu.svg"/>
            </div>
            <div
                :class="isOpen ? 'block' : 'hidden'"
                class="md:flex-1 md:flex md:h-auto absolute right-0 h-screen bg-black justify-between items-center px-8"
            >
                <a
                    v-for="item in items"
                    :href="item.href"
                    class="md:mx-3 block rounded p-2 text-white text-xl cursor-pointer hover:bg-gray-700"
                >
                    {{ item.title }}
                </a>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data: () => ({
        isOpen: false,
        items: [
            {href: '#about', title: 'About Us'},
            {href: '#why', title: 'Why Us?'},
            {href: '#works', title: 'Our Works'},
            {href: '#contact', title: 'Contact Us'}
        ]
    }),
    methods: {
        toggleMenu() {
            this.isOpen = !this.isOpen
        }
    }
}
</script>

