<script lang="ts" setup></script>

<template>
  <section id="kontakt" class="mx-auto my-20">
    <h2 class="text-3xl font-semibold mb-3">Kontakt</h2>
    <p class="mb-3">So kann man uns erreichen:</p>
    <div class="flex flex-wrap gap-2">
      <LinkButton
        href="mailto:kontakt@byteflow-reutershagen.de"
        icon="i-lucide-mail"
        subtle
      >
        kontakt@byteflow-reutershagen.de
      </LinkButton>
      <LinkButton
        href="https://www.instagram.com/byteflow_reutershagen/"
        icon="i-lucide-instagram"
        subtle
      >
        byteflow_reutershagen
      </LinkButton>
    </div>
  </section>
</template>

<style scoped>
#kontakt {
  max-width: calc(max(80%, 30rem));
}

h2::after {
  content: "";
  display: block;
  width: 4rem;
  height: 2px;
  background-color: var(--color-maya-blue);
  margin: 0.5rem 0 1rem;
}

.contact-link {
  position: relative;
  padding: 0.5rem 1rem;
  background-color: #5556;
  border-radius: 12px;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.contact-link::before {
  content: "";
  position: absolute;
  inset: 0;
  padding: 3px;
  border-radius: 12px;
  background: linear-gradient(10deg, #aaa3, #fffa);
  mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
  mask-composite: exclude;
  pointer-events: none;
}
</style>
