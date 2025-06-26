<script lang="ts" setup></script>

<template>
  <div
    id="hero"
    class="h-148 flex flex-col items-center justify-center text-center"
  >
    <h1 class="text-4xl font-bold mb-4 px-2 text-balance">
      Software und 3D-Druck für alle
    </h1>
    <p class="text-lg mb-6 px-2 text-balance">
      Wir gestalten digitale Lösungen, alle aus einer Hand.
    </p>
    <div class="flex flex-col sm:flex-row gap-2">
      <LinkButton
        href="https://youtu.be/DVP4fCv98pQ"
        target="_blank"
        icon="i-lucide-square-play"
      >
        Introvideo ansehen
      </LinkButton>
      <LinkButton href="#kontakt" subtle> Jetzt Kontakt aufnehmen </LinkButton>
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
