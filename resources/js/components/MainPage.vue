<template>
    <div class="h-screen flex justify-center items-center bg-black">
        <div class="text-white">SJ's<br> Painting</div>
        <div class="text-white">Let the Euro do it</div>
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
