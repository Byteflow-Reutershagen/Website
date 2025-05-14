<script setup lang="ts">
const route = useRoute();

const { data: content } = await useFetch(
  useOrigin() + "/api/article/" + route.params.id
);
</script>

<template>
  <div class="min-h-screen">
    <div class="px-6 py-10 mx-auto max-w-5xl">
      <LinkButton href="/newsroom" icon="i-lucide-newspaper" class="mb-2 w-max">
        Zum Newsroom
      </LinkButton>
      <div id="date" class="flex flex-row gap-1.5 items-center mt-4">
        <Icon name="i-lucide-calendar" />
        {{
          new Date(route.params.id).toLocaleString("de-DE", {
            dateStyle: "long",
            timeStyle: "short",
          })
        }}
      </div>
      <article v-html="content" class=""></article>
    </div>
  </div>
</template>

<style>
@reference "tailwindcss";

#date {
  @apply text-gray-400;
  transition: color var(--dark-mode-transition-duration);
}

.light-mode #date {
  @apply text-gray-500;
}

article h1 {
  @apply text-3xl font-bold mb-3.5 mt-3;
}

article h2 {
  @apply text-2xl font-semibold mb-1 mt-4;
}

article h3 {
  @apply text-xl font-medium mb-0.5 mt-2;
}

article p {
  @apply mb-2;
}

article a {
  @apply underline;
  color: var(--color-maya-blue);
}

article img {
  @apply mx-auto my-6 max-h-130 rounded-xl;
}
</style>
