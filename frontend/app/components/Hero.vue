<script lang="ts" setup></script>

<template>
  <div id="hero" class="flex flex-col items-center justify-center text-center">
    <h1 class="text-4xl font-bold mb-4 px-2 text-balance">
      Kreativität, die funktioniert
    </h1>
    <p class="text-lg mb-6 px-2 text-balance">
      Wir entwickeln Websites, schneiden Videos und drucken Ideen -
      professionell und mit Liebe zum Detail
    </p>
    <div class="flex flex-col sm:flex-row gap-2">
      <LinkButton
        href="https://youtu.be/DVP4fCv98pQ"
        target="_blank"
        icon="lucide:square-play"
      >
        Introvideo ansehen
      </LinkButton>
      <LinkButton href="#kontakt" subtle> Kontaktieren Sie uns </LinkButton>
      <LinkButton href="#team" subtle> Lernen Sie uns kennen </LinkButton>
    </div>
  </div>
</template>

<style>
#hero {
  --light-gradient: radial-gradient(
    ellipse at 10% 5%,
    color-mix(in srgb, transparent, var(--color-maya-blue) 20%) 0%,
    transparent 30%
  );

  position: relative;
  overflow-x: hidden;
  overflow-y: clip;
  height: calc(var(--spacing) * 75);
}

.light-mode #hero {
  --light-gradient: radial-gradient(
    ellipse at 10% 5%,
    color-mix(in srgb, transparent, var(--color-maya-blue) 40%) 0%,
    transparent 30%
  );
}

#hero::before {
  content: "";
  position: absolute;
  width: 200%;
  height: 200%;
  inset: 0;
  z-index: -1;
  background: var(--light-gradient);
}

.light-mode #hero {
  text-shadow: 0 0 10px #0002;
}
</style>
