<script lang="ts" setup></script>

<template>
  <section class="flex flex-col md:flex-row items-center gap-6 mx-6 my-24">
    <div class="basis-1/2">
      <h2 class="text-3xl font-semibold mb-3">Unsere Partner</h2>
      <p>
        Gemeinsam mit unseren Partnern setzen wir auf Innovation und Qualität.
      </p>
    </div>
    <ul id="partners" class="basis-1/2">
      <a href="https://gymnasium-reutershagen.de/" target="_blank">
        <li>
          <ColorScheme>
            <img
              src="/images/partners/logo-gy-reutershagen-light.svg"
              alt="Gymnasium Reutershagen"
              :style="{ opacity: +($colorMode.value === 'light') }"
            />
            <img
              src="/images/partners/logo-gy-reutershagen-dark.svg"
              alt="Gymnasium Reutershagen"
              class="absolute"
              :style="{ opacity: +($colorMode.value === 'dark') }"
            />
          </ColorScheme>
          <div>Gymnasium Reutershagen</div>
        </li>
      </a>
      <a href="https://mikromint.de/sfzrostock/" target="_blank">
        <li>
          <img
            src="/images/partners/logo-sfz.png"
            alt="Schülerforschungszentrum"
          />
          <div>MikroMint Schüler&shy;forschungs&shy;zentrum</div>
        </li>
      </a>
      <a href="https://rst-rostock.de/" target="_blank">
        <li>
          <img
            src="/images/partners/logo-rst.svg"
            alt="Rostock System-Technik"
          />
          <div>Rostock System-Technik</div>
        </li>
      </a>
    </ul>
  </section>
</template>

<style scoped>
h2::after {
  content: "";
  display: block;
  width: 4rem;
  height: 2px;
  background-color: var(--color-maya-blue);
  margin: 0.5rem 0 1rem;
}

#partners {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

#partners div {
  font-size: 1.125rem;
  font-weight: medium;
  color: #ccc;
  transition: color var(--dark-mode-transition-duration);
}

.light-mode #partners div {
  color: #444;
}

#partners li {
  position: relative;
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1rem;
  border-radius: 12px;
  background-color: #aaa1;
}

@property --gradient-color-1 {
  syntax: "<color>";
  inherits: false;
  initial-value: #aaa3;
}
@property --gradient-color-2 {
  syntax: "<color>";
  inherits: false;
  initial-value: #fffa;
}

#partners li::before {
  content: "";
  position: absolute;
  inset: 0;
  padding: 3px;
  border-radius: 12px;
  background: linear-gradient(
    10deg,
    var(--gradient-color-1),
    var(--gradient-color-2)
  );
  mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
  mask-composite: exclude;
  pointer-events: none;
  transition: --gradient-color-1 var(--dark-mode-transition-duration),
    --gradient-color-2 var(--dark-mode-transition-duration);
}

.light-mode #partners li::before {
  --gradient-color-1: #8884;
  --gradient-color-2: #888a;
}

#partners li img {
  width: 60px;
  height: 60px;
  object-fit: contain;
  transition: opacity var(--dark-mode-transition-duration);
}
</style>
