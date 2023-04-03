<script setup>
import { Head, Link, useForm, router } from '@inertiajs/vue3';


import { ref, watch, reactive } from "vue";

import CarCard from '../Components/CarCard.vue'
const props = defineProps({
    cars: {
        type: Object,
        default: () => ({}),
    },
    allCars: {
        type: Object,
        default: () => ({}),
    },
    images: {
        type: Object,
        default: () => ({}),
    },
})
function getImages(id, image) {
    let imagesById = []
    if (image.model_id == id) {
        imagesById.push('/storage/' + image.id + '/' + image.file_name)
    }
    console.log(imagesById)
    return imagesById
}
const formDelete = useForm({})
function destroy(id) {
    if (confirm('Are you sure you want to Delete')) {
        formDelete.delete(route('cars.destroy', id))
    }
}
const filterForm = reactive({
  selectMake: null,
  selectModel: null,
})

console.log(props.images)
console.log(props.cars)
let filterCars = ref('');

// watch(filterCars, (value) => {
//   router.get(
//     "/kasutatud",
//     { filterForm: value, },
//     {
//       preserveState: true,
//     }
//   );
// });
function submit() {
    router.get(
    "/kasutatud",
     filterForm,
    {
      preserveState: true,
    }
  );
}
</script>
<script>
import Layout from "../Layouts/Layout.vue";
export default {
    layout: Layout
}
</script>
<template>
    <form @submit.prevent="submit">
    <select v-model="filterForm.selectMake">
        <option  v-for="car in allCars" :key="car.make" :value="car.make">{{car.make}}</option>
    </select>
    <select v-model="filterForm.selectModel">
        <option  v-for="car in allCars" :key="car.model" :value="car.model">{{car.model}}</option>
        <option value="">All</option>
    </select>
    <button type="submit">Submit</button>
</form>
                                <input
                                    type="text"
                                    v-model="search"
                                    placeholder="Search..."
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-60 p-2.5 "
                                />
    <CarCard :cars="cars"></CarCard>

</template>
