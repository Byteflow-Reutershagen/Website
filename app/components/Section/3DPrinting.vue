<script lang="ts" setup></script>

<template>
  <section
    class="flex flex-col md:flex-row items-center gap-10 sm:px-4 mt-24 mb-16"
  >
    <div class="basis-1/2">
      <h3 class="text-2xl font-semibold mb-2">Qualitativer 3D-Druck</h3>
      <div>
        <p class="mt-2">
          Perfekte Designs und professioneller 3D-Druck für Schule, Hobby oder
          professionelle Projekte. Von der Idee bis zum fertigen Produkt –
          präzise und zuverlässig.
        </p>
        <ul class="feature-list mt-3 mb-6 text-sm">
          <li>Persönliche Beratung</li>
          <li>Qualitativ</li>
          <li class="line-through text-[#888]!">Filament-Recycling</li>
        </ul>
      </div>
    </div>
    <img
      src="/images/3d-printing.jpeg"
      alt="Programmierung"
      class="rounded-xl basis-1/2 w-full aspect-4/3 object-cover max-w-[50%]"
    />
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
  transition: color var(--dark-mode-transition-duration),
    background-color var(--dark-mode-transition-duration),
    border-color var(--dark-mode-transition-duration);
}

.light-mode .feature-list li {
  background-color: #eee;
  border-color: #ddd;
  color: #333;
}
</style>
