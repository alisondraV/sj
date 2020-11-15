<template>
    <div class="h-screen bg-black px-20 flex flex-col justify-center items-center">
        <p class="text-white text-6xl mb-4">Contact Us</p>
        <form method="post" @submit.prevent="sendEmail">
            <label class="text-white text-lg">Name:<br>
                <input
                    class="p-1 rounded-lg text-white bg-transparent border border-white mt-2 mb-6 w-full"
                    type="text"
                    v-text="name"
                ><br>
            </label>
            <label class="text-white text-lg">Email:<br>
                <input
                    class="p-1 rounded-lg text-white bg-transparent border border-white mt-2 mb-6 w-full"
                    type="email"
                    v-text="email"
                ><br>
            </label>
            <label class="text-white text-lg">Message:<br>
                <textarea
                    class="p-1 rounded-lg text-white bg-transparent border border-white mt-2 mb-6"
                    cols="50"
                    rows="3"
                    v-text="message"
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
export default {
    data() {
        return {
            name: '',
            email: '',
            message: ''
        }
    },
    methods: {
        sendEmail: (e) => {
            console.log('Send email');
        }
    }
}
</script>
