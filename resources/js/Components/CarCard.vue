<script setup>
    const props = defineProps({
    cars: {
        type: Object,
        default: () => ({}),
    },
    images: {
        type: Object,
        default: () => ({}),
    },
})
</script>
<template>
    <div v-for="car in cars" :key="car.id">
            <div class="w-[250px] h-[300px] bg-white rounded-2xl overflow-hidden shadow-lg">
                <div class="w-full h-[50%] relative">
                    <div class="w-full h-full bg-red-400"></div>
                    <div class="absolute top-3 left-3">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.24864 1.99784L9.24953 1.99853C9.61598 2.28327 9.93539 2.61996 10.2244 2.97166L11.0007 3.9164L11.7726 2.96807C12.0603 2.6145 12.3733 2.27962 12.7346 1.99688C13.4784 1.41571 14.4814 1 16.0005 1C19.0316 1 21 3.61354 21 6.50043C21 9.49345 19.5007 12.1161 17.5005 14.245C15.502 16.372 13.0008 17.9993 11.003 18.9997C9.00295 17.9996 6.50438 16.3724 4.50543 14.2449L4.50402 14.2434C2.49944 12.1187 1 9.49351 1 6.50043C1 3.61592 3.00578 1 5.99945 1C7.50098 1 8.49929 1.41421 9.24864 1.99784ZM10.3122 1.59542C10.2813 1.63236 10.2511 1.66908 10.2214 1.70553L10.997 2.3368L11.7696 1.70193C11.7396 1.6654 11.709 1.62863 11.6778 1.59167C11.8162 1.45946 11.9628 1.33098 12.1189 1.20889L10.3122 1.59542Z" stroke="#D9D9D9" stroke-width="2"/>
                        </svg>
                    </div>


                </div>
            <div class="flex mx-3">
                <div class="flex flex-col w-[50%]">
                    <span class="uppercase text-[#505A5B] text-xs">{{ car.make }}</span>
                    <span class="text-black">{{ car.model }}</span>
                    <span>{{ car.body }}</span>
                    <span>{{ car.mileage }} km</span>
                </div>
                <div class="flex flex-col w-[50%] text-end">
                    <span>{{ car.price }}</span>
                </div>
            </div>

            <!-- <div v-for="image in images" class="flex w-[10vw]">
                <img :src="getImages(car.id, image)">
            </div> -->
            <!-- <button @click="destroy(car.id)">DELETE</button> -->
        </div>
    </div>
</template>
