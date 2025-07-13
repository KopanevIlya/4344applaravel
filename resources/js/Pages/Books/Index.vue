

<template>
    <div>

        <h1>Каталог книг</h1>
        <ul>
            <li v-for="book in books" :key="book.id">
                <h2>{{ book.title }}</h2>
                <h2>{{ book.author }}</h2>
                <h2>{{ book.description }}</h2>

            </li>
        </ul>
    </div>



</template>

<script setup>
defineProps({books:Array})

</script>