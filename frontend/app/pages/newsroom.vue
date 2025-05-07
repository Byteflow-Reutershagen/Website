<script setup lang="ts">
const { data: articles } = await useFetch<{ id: string; content: string }[]>(
  useOrigin() + "/api/articles"
);
</script>

<template>
  <div class="flex justify-center min-h-screen mx-6 my-12">
    <main>
      <h1 class="text-3xl font-bold mb-1">Newsroom</h1>
      <p class="mb-4">
        Hier sind alle Artikel, die auf unserer Website veröffentlicht wurden.
      </p>
      <div v-for="article in articles" class="mb-4">
        <ArticlePreview :article="article" />
      </div>
    </main>
  </div>
</template>

<style scoped>
main {
  max-width: calc(max(80%, 30rem));
}
</style>
