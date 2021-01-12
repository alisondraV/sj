<template>
    <div class="min-h-screen bg-black px-20 flex flex-col justify-center items-center">
        <p class="text-white text-4xl md:text-6xl mb-4">Contact Us</p>
        <form method="post" @submit.prevent="sendEmail">
            <label class="text-white text-lg">Name:<br>
                <input
                    class="text-white bg-transparent border-b border-white mt-2 mb-6 w-full"
                    placeholder="Please enter your name"
                    type="text"
                    v-model="contact.name"
                ><br>
            </label>
            <label class="text-white text-lg">Email:<br>
                <input
                    class="text-white bg-transparent border-b border-white mt-2 mb-6 w-full"
                    placeholder="Please enter your email"
                    type="email"
                    v-model="contact.email"
                ><br>
            </label>
            <label class="text-white text-lg">Message:<br>
                <textarea
                    class="text-white bg-transparent border-b border-white mt-2 mb-6 w-full"
                    cols="50"
                    placeholder="Please enter your message"
                    rows="3"
                    v-model="contact.message"
                /><br>
            </label><br>
            <div class="flex justify-center">
                <input
                    type="submit"
                    id="submit"
                    value="Submit"
                    class="p-3 rounded-2xl bg-transparent border-2 border-white text-white text-lg w-1/3"
                >
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            contact: {}
        }
    },
    methods: {
        sendEmail() {
            axios.post('/send', this.contact)
                .then(response => alert(response))
                .catch(error => alert(error));
        }
    }
}
</script>
