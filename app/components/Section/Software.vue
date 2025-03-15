<script lang="ts" setup></script>

<template>
  <section
    class="flex flex-col md:flex-row items-center gap-10 sm:px-4 mt-24 mb-16"
  >
    <img
      src="/images/software.jpeg"
      alt="Programmierung"
      class="rounded-xl basis-1/2 w-full"
    />
    <div class="basis-1/2">
      <h3 class="text-2xl font-semibold mb-2">Individuelle Softwarelösungen</h3>
      <div>
        <p class="mt-2">
          Wir entwickeln maßgeschneiderte Software – ob Websites, Apps oder
          Desktop-Anwendungen. Modern, benutzerfreundlich und kostengünstig.
        </p>
        <ul class="feature-list mt-3 mb-6 text-sm">
          <li>Persönliche Beratung</li>
          <li>Schnell</li>
          <li>Modern</li>
        </ul>
        <div id="languages" class="flex flex-wrap gap-4 mt-4">
          <img src="/images/languages/python.svg" alt="Python" />
          <img src="/images/languages/java.svg" alt="Java" />
          <img src="/images/languages/php.svg" alt="PHP" />
          <img src="/images/languages/typescript.svg" alt="TypeScript" />
          <img src="/images/languages/nuxt.svg" alt="Nuxt" />
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
#languages img {
  height: 2.5rem;
}

.feature-list {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.feature-list li {
  background-color: #222;
  border: 1px solid #444;
  color: #ddd;
  padding: 0.125rem 0.325rem;
  border-radius: 0.375rem;
}

.light-mode .feature-list li {
  background-color: #eee;
  border-color: #ddd;
  color: #333;
}
</style>
