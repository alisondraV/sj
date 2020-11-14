<template>
    <div class="h-screen flex bg-black justify-around items-center p-10">
        <div class="flex flex-col">
            <p class="text-6xl text-white mb-6">SJ's<br> Painting</p>
            <p class="text-3xl text-white">Let the Euro do it</p>
        </div>
        <div class="flex flex-row">
            <img class="w-full" src="@assets/Bin.svg"/>
            <img class="animate w-1/3" src="@assets/Roller.svg"/>
        </div>
    </div>
</template>


<style scoped>
.animate {
    animation: bounceOutDown 3s 1s 1, bounceInUp 3s 3s 1;
}
</style>
