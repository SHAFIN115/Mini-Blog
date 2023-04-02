<script setup>
import { onMounted } from "vue";
import useStudent from "../composables/miniblog";
const { studentData, error, getAllStudent } = useStudent();
onMounted(getAllStudent);
</script>

<template>
  <h1>Connect Vue JS with Laravel</h1>
  <div v-if="error">Oops! Error encountered: {{ error.message }}</div>
  <div v-else-if="studentData">
    <div v-for="({ id, title, body }, i) in studentData" :key="id">
      <h2>
        {{ ++i }}
        {{ title }}
        {{ body }}
      </h2>
    </div>
  </div>
</template>

<style scoped></style>