<script lang="ts" setup>
const props = defineProps<{
  href: string;
  target?: string;
  icon?: string;
  subtle?: boolean;
}>();
</script>

<template>
  <NuxtLink
    :href="props.href"
    :target="props.target"
    class="bg-maya-blue py-1.5 px-3 rounded-md flex items-center justify-center gap-1.5 font-medium"
    :class="{
      'bg-maya-blue/15 border-maya-blue/25 border': subtle,
      'text-floral-white': !subtle,
    }"
  >
    <Icon v-if="props.icon" :name="props.icon" size="20" />
    <slot />
  </NuxtLink>
</template>

<style scoped>
a {
  text-shadow: none;
  transition: filter 0.2s ease-out;
}

a:hover {
  filter: brightness(0.9);
}
</style>
