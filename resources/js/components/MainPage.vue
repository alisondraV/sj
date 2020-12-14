<template>
    <div class="min-h-screen flex flex-col md:flex-row bg-black justify-around items-center p-10">
        <div class="flex flex-col mt-20 md:mt-0">
            <p class="text-6xl text-white mb-6">SJ's<br> Painting</p>
            <p class="text-3xl text-white">Let the Euro do it</p>
        </div>
        <div class="flex flex-row w-1/3 md:w-auto">
            <img class="w-full" src="@assets/Bin.svg" alt="Bin"/>
            <img class="animate w-1/3" src="@assets/Roller.svg" alt="Roller"/>
        </div>
    </div>
</template>


<style scoped>
.animate {
    animation: bounceOutDown 3s 1s 1, bounceInUp 3s 3s 1;
}
</style>
