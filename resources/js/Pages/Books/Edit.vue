<script setup>
import { useForm } from '@inertiajs/vue3';





const props = defineProps({ book: Object });

const form = useForm({
  title: props.book.title,
  author: props.book.author,
  description: props.book.description,
});
</script>

<template>
  <div>
    <h1>Редактировать книгу</h1>
    <form @submit.prevent="form.put(`/books/${props.book.id}`)">
      <div>
        <label>Название</label>
        <input v-model="form.title" required>
      </div>
      <div>
        <label>Автор</label>
        <input v-model="form.author" required>
      </div>
      <div>
        <label>Описание</label>
        <textarea v-model="form.description"></textarea>
      </div>
      <button type="submit">Сохранить изменения</button>
    </form>
  </div>
  </template>