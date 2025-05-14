<script setup lang="ts">
const { article } = defineProps<{
  article: { id: string; content: string };
}>();
</script>

<template>
  <a :href="'/article/' + article.id + '/read'">
    <div class="article-preview">
      <div v-html="article.content" />
      <div class="text-[#888] text-sm mt-1">
        {{
          new Date(article.id).toLocaleString("de-DE", {
            dateStyle: "medium",
            timeStyle: "short",
          })
        }}
      </div>
    </div>
  </a>
</template>

<style scoped>
@reference "tailwindcss";

.article-preview {
  @apply shadow-md w-full p-4 rounded-xl;
  background-color: #9992;
  transition: box-shadow 0.2s;
  line-clamp: 3;
}

.article-preview:hover {
  @apply shadow-lg;
}

::v-deep(h2),
::v-deep(h3),
::v-deep(p) {
  display: inline;
  padding-right: 0.5rem;
}

::v-deep(h1),
::v-deep(h2),
::v-deep(h3) {
  font-weight: 500;
}

::v-deep(h1) {
  font-size: 1.25rem;
}
</style>
