<template>
    <div class="h-screen bg-black px-20 flex flex-col justify-center">
        <div class="text-white text-6xl">Why Us?</div>
        <div class="flex flex-row">
            <div v-for="(item, index) in items">
                <why-reason
                    :key="index"
                    :title="item.title"
                    :description="item.description"
                    :image="item.image">
                </why-reason>
            </div>
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
