<script setup lang="ts">
const url = useRequestURL();

const { data: article } = await useFetch<{ id: string; content: string }>(
  url.origin + "/api/article/latest"
);
</script>

<template>
  <section v-if="article" class="mx-auto my-20">
    <h2 class="text-3xl font-semibold mb-3">Neues aus dem Newsroom</h2>
    <p class="mb-3">
      <a href="/newsroom" class="text-maya-blue">Hier</a> veröffentlichen wir
      unsere wichtigsten Neuigkeiten.
    </p>
    <ArticlePreview :article="article" />
  </section>
</template>

<style scoped>
section {
  max-width: calc(max(80%, 30rem));
}

h2::after {
  content: "";
  display: block;
  width: 4rem;
  height: 2px;
  background-color: var(--color-maya-blue);
  margin: 0.5rem 0 1rem;
}
</style>
