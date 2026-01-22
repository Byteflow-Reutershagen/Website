<script lang="ts" setup></script>

<template>
  <section
    class="flex flex-col md:flex-row items-center gap-10 sm:px-4 mt-24 mb-16"
  >
    <div class="basis-1/2">
      <h3 class="text-2xl font-semibold mb-2">Qualitativer 3D-Druck</h3>
      <div>
        <p class="mb-3">
          Perfekte Designs und professioneller 3D-Druck für alle Ihre Ideen. <br>
          Von ästhetischer Deko zu maßgeschneiderten Bauteilen modellieren und fertigen wir 
          alles was Sie sich vorstellen können – schnell, einfach und auf Ihre Anforderungen abgestimmt. <br>
        </p>
        <h4 class="font-semibold text-xl transition">Wir bieten:</h4>
        <ul class="feature-list mt-1 mb-6 text-sm font-semibold">
          <li>Persönliche Beratung</li>
          <li>Professionelle Modellierung</li>
          <li>Hochwertige Fertigung</li>
        </ul>
      </div>
    </div>
    <img
      src="/images/3d-printing.jpeg"
      alt="Programmierung"
      class="rounded-xl basis-[50%] aspect-4/3 object-cover max-h-96"
    />
  </section>
</template>

<style scoped>
#languages img {
  height: 2.5rem;
}

.feature-list {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  gap: 0.5rem;
  list-style-type: circle;
}

.feature-list li {
  /*background-color: #222; 
  border: 1px solid #444; 
  padding: 0.125rem 0.325rem;
  border-radius: 0.375rem;*/
  color: #ddd;
  transition: color var(--dark-mode-transition-duration),
    background-color var(--dark-mode-transition-duration),
    border-color var(--dark-mode-transition-duration);
}

.light-mode .feature-list li {
  /*background-color: #eee;
  border-color: #ddd;*/
  color: #333;
}

.transition {
  transition: color var(--dark-mode-transition-duration);
}
</style>
