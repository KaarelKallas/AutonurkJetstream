<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import { useForm } from '@inertiajs/vue3'
const form = useForm({
    make: null,
    model: null,
    body: null,
    engine: null,
    engine_size: null,
    power: null,
    gearbox: null,
    fuel: null,
    drive: null,
    year: null,
    mileage: null,
    color: null,
    plate: null,
    VIN: null,
    price: null,
    used: null,

})
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
            <form @submit.prevent="form.post('/cars/store')">
                    <label for="make">Make:</label>
                    <input id="make" v-model="form.make" />
                    <label for="model">Model:</label>
                    <input id="model" v-model="form.model" />
                    <label for="body">Body:</label>
                    <input id="body" v-model="form.body" />
                    <label for="engine">Engine:</label>
                    <input id="engine" v-model="form.engine" />
                    <label for="engine_size">Engine size:</label>
                    <input id="engine_size" v-model="form.engine_size" />
                    <label for="power">Power:</label>
                    <input id="power" v-model="form.power" />
                    <label for="gearbox">Gearbox:</label>
                    <input id="gearbox" v-model="form.gearbox" />
                    <label for="fuel">Fuel:</label>
                    <input id="fuel" v-model="form.fuel" />
                    <label for="drive">Drive:</label>
                    <input id="drive" v-model="form.drive" />
                    <label for="year">Year:</label>
                    <input id="year" v-model="form.year" />
                    <label for="mileage">Mileage:</label>
                    <input id="mileage" v-model="form.mileage" />
                    <label for="color">Color:</label>
                    <input id="color" v-model="form.color" />
                    <label for="plate">Plate:</label>
                    <input id="plate" v-model="form.plate" />
                    <label for="VIN">VIN:</label>
                    <input id="VIN" v-model="form.VIN" />
                    <label for="price">Price:</label>
                    <input id="price" v-model="form.price" />
                    <label for="used">Used:</label>
                    <input id="used" v-model="form.used" />

                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                        {{ form.progress.percentage }}%
                    </progress>

                    <button type="submit">Submit</button>
                </form>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
