<script lang="ts" setup>
const props = defineProps<{
  title: string;
  icon: string;
  description: string;
}>();
</script>

<template>
  <div class="card p-6 shadow-md rounded-2xl">
    <div class="flex items-center gap-2 mb-1.5">
      <Icon :name="props.icon" size="24" />
      <h2 class="text-xl font-semibold">{{ props.title }}</h2>
    </div>
    <p>{{ props.description }}</p>
  </div>
</template>

<style scoped>
.card {
  position: relative;
  background-color: #5551;
  border-radius: 12px;
}

.card::before {
  content: "";
  position: absolute;
  inset: 0;
  padding: 3px;
  border-radius: 12px;
  background: linear-gradient(10deg, transparent, #fff8);
  mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
  mask-composite: exclude;
  pointer-events: none;
}
</style>
