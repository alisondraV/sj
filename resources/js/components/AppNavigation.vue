<template>
    <nav class="bg-black flex p-3 fixed w-screen">
        <div class="flex-1 flex flex-row items-center lg:ml-12">
            <img class="w-20 mx-4" src="@assets/Logo.png" alt="Logo"/>
            <a href="tel:12266008629" class="text-white text-lg">+1 (226) 600-86-29</a>
        </div>
        <div class="lg:flex lg:items-center">
            <div class="cursor-pointer block lg:hidden" @click="toggleMenu">
                <img class="w-8 m-8" src="@assets/Menu.svg" alt="Menu"/>
            </div>
            <div
                :class="isOpen ? 'block' : 'hidden'"
                class="lg:flex-1 lg:flex lg:h-auto absolute right-0 h-screen bg-black justify-between items-center px-8"
            >
                <a
                    v-for="item in items"
                    :href="item.href"
                    class="lg:mx-3 block rounded p-2 text-white text-xl cursor-pointer hover:bg-gray-700"
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

