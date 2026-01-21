<script lang="ts" setup></script>

<template>
  <section
    class="flex flex-col md:flex-row items-center gap-10 sm:px-4 mt-24 mb-16"
  >
    <img
      src="/images/software.jpeg"
      alt="Programmierung"
      class="rounded-xl basis-[50%] aspect-4/3 object-cover max-h-96"
    />
    <div class="basis-1/2">
      <h3 class="text-2xl font-semibold mb-2">Ihre Website, die wirkt</h3>
      <div>
        <p class="mt-2">
          Wir entwickeln Websites, Webshops und Tools, die nicht nur gut aussehen,
          sondern auch wirken.
          Von der ersten Idee bis zur Fertigstellung gestalten wir digitale Lösungen, die
          auf Ihre Ziele zugeschnitten sind – technisch solide, benutzerfreundlich und mit
          einem Auge für das Detail.
          Egal ob Unternehmensseite, Online-Shop oder individuelle Webanwendung: Wir
          denken mit, programmieren sauber und setzen auf langfristige Qualität statt
          schnellen Kompromissen.
        </p>
        <p class="font-semibold">Wir bieten:</p>
        <ul class="feature-list mt-3 mb-6 text-sm">
          <li>Individuelle Websites & Webshops</li>
          <li>Responsives Design, Integration in bestehende Systeme, Sonderfunktionen</li>
          <li>Wartung, Updates & Optimierung für langfristigen Erfolg</li>
        </ul>
        <div id="languages" class="flex flex-wrap gap-4 mt-4">
          <!--
          <img src="/images/languages/unity.svg" alt="Unity" />
          -->
          <ThemeImage
            light="/images/languages/html.svg"
            dark="/images/languages/html-dark.svg"
            alt="HTML"
          />
          <ThemeImage
            light="/images/languages/css.svg"
            dark="/images/languages/css-dark.svg"
            alt="CSS"
          />
          <ThemeImage
            light="/images/languages/WordPress-logo.png"
            dark="/images/languages/WordPress-logo-dark.png"
            alt="WordPress"
          />
          <ThemeImage
            light="/images/languages/shopware.png"
            dark="/images/languages/shopware.png"
            alt="Shopware"
          />
          <ThemeImage
            light="/images/languages/more.svg"
            dark="/images/languages/more-dark.svg"
            alt="More"
          />
          <img src="/images/languages/python.svg" alt="Python" />
        </div>
      </div>
    </div>
  </section>
</template>

<style>
#languages img {
  height: 2.5rem;
}

.feature-list {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  gap: 0.5rem;
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
  background-color: #eee;
  border-color: #ddd;
  color: #333;
}
</style>
