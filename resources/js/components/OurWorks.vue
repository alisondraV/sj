<template>
     <div class="h-screen flex flex-col items-center justify-center">
        <div class="text-6xl mb-4">Our Works</div>
        <carousel
            :per-page="1"
            paginationActiveColor="black"
            paginationColor="grey"
            class="w-1/2"
            paginationPosition="bottom-overlay"
        >
            <template v-for="(item, index) in items">
                <slide :key="index">
                    <work-component
                        style="width: 50vw;"
                        :title="item.title"
                        :description="item.description"
                        :image="item.image">
                    </work-component>
                </slide>
            </template>
        </carousel>
     </div>
</template>

<script>
import Work from './WorkComponent';
import { Carousel, Slide } from 'vue-carousel';
import WorkComponent from './WorkComponent';

export default {
    components: {
        WorkComponent,
        Work,
        Carousel,
        Slide
    },
    data() {
     return {
        items: [
            {
                title: 'On-site Estimate',
                description: 'We’ll come to your home and provide you with an individual proposal including price and schedule',
                image: 'Estimate.jpg'
            },
            {
                title: 'Prep Work',
                description: 'We cover everything with lightweight plastic sheeting, fix holes and corners, set up a drywall',
                image: 'Prep.jpg'
            },
            {
                title: 'Paint',
                description: 'We use the best painting techniques and tools including rollers, brushes and spray guns',
                image: 'Paint.jpg'
            },
            {
                title: 'Clean Up',
                description: 'We always make sure, that there is no painter tape, spills or splatters left after us',
                image: 'CleanUp.jpg'
            },
            {
                title: 'Exceptional Results',
                description: 'We’ll do a walkthrough before we leave and check-in after to ensure you’re happy!',
                image: 'Results.jpg'
            }
        ]
        };
    }
}
</script>
