<template>
    <div class="flex justify-center min-h-screen bg-black">
        <div class="flex flex-col justify-center px-8 mb-10">
            <p class="text-center md:text-left text-4xl md:text-6xl text-white mb-1 md:mb-4 mt-24 md:mt-10">
                Why Us?
            </p>
            <section class="grid md:grid-cols-2 gap-4">
                <div
                    v-for="(item, index) in items"
                    :key="`${item.title}`"
                >
                    <why-reason
                        :description="item.description"
                        :image="item.image"
                        :key="index"
                        :title="item.title"
                    >
                    </why-reason>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import WhyReason from './WhyReason';

export default {
    components: {
        WhyReason
    },
    data: () => ({
        items: [
            {
                title: 'The best tools',
                description: 'Our team uses only professional industry tools',
                image: 'BestTools.png'
            },
            {
                title: 'Blazing fast',
                description: 'We always finish our work as soon as possible',
                image: 'BlazingFast.png'
            },
            {
                title: '100% guarantee',
                description: 'We always make sure, you\'re 100% satisfied with our work',
                image: 'Quality.png'
            },
            {
                title: 'Affordable prices',
                description: 'We offer high quality for available prices',
                image: 'Prices.png'
            }
        ]
    })
}
</script>
