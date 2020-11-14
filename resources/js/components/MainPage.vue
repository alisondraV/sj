<template>
    <div class="h-screen flex justify-center items-center bg-black">
        <p class="text-6xl text-white">SJ's<br> Painting</p>
        <p class="text-3xl text-white">Let the Euro do it</p>
        <div>
            <img class="w-1/2" src="@assets/Bin.svg"/>
            <img class="animate w-1/4" src="@assets/Roller.svg"/>
        </div>
    </div>
</template>


<style scoped>
.animate {
    animation: bounceOutDown 3s 1s 1, bounceInUp 3s 3s 1;
}
</style>
