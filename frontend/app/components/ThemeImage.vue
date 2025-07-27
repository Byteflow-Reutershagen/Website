<script lang="ts" setup>
const {
  light: lightSrc,
  dark: darkSrc,
  alt,
  class: imgClass,
} = defineProps<{
  light: string;
  dark: string;
  alt?: string;
  class?: string;
}>();
</script>

<template>
  <div>
    <ColorScheme>
      <img
        :src="lightSrc"
        :alt
        class="absolute"
        :class="imgClass"
        :style="{ opacity: +($colorMode.value === 'light') }"
      />
      <img
        :src="darkSrc"
        :alt
        :class="imgClass"
        :style="{ opacity: +($colorMode.value === 'dark') }"
      />
    </ColorScheme>
  </div>
</template>

<style scoped>
img {
  transition: opacity var(--dark-mode-transition-duration);
}
</style>
