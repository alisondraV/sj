<template>
    <div class="bg-black h-screen">
        <div class="flex justify-center items-center">
            <p class="text-white text-6xl">Contact Us</p>
            <form method="post" @submit.prevent="sendEmail">
                <label for="name">Name:</label><br>
                <input type="text" id="name" placeholder="Name"/><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" placeholder="Email@example.com"/><br>
                <label for="message">Message:</label><br>
                <textarea id="message" rows="3" cols="50" placeholder="Message"/><br>
                <div>
                    <input type="submit" id="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        sendEmail: (e) => {
            console.log('Send email');
        }
    }
}
</script>
