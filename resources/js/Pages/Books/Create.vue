<template>
    <AuthenticatedLayout>
    <div>
        <h1>Добавить книгу</h1>
        <form @submit.prevent = "form.post('/books')" >
           <div>
                <label>Название</label>
                <input v-model="form.title" required type="text">
            </div> 

            <div>
                <label>Автор</label>
                <input v-model="form.author" type="text">
            </div> 

            <div>
                <label>Описание</label>
                <textarea v-model="form.description"></textarea>
            </div> 

            <button type="submit">Сохранить</button>

        </form>
    </div>
</AuthenticatedLayout>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';



const form = useForm({
    title:"",
    author:"",
    description:""

})


</script>