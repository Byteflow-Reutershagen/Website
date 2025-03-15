<script lang="ts" setup></script>

<template>
  <h2 class="text-3xl font-semibold text-center mb-8">Unser Angebot</h2>
  <section class="grid md:grid-cols-3 gap-4 px-6 mx-auto max-w-7xl">
    <OfferCard
      title="Software"
      icon="i-lucide-code"
      description="Wir bieten für sowohl Privatkunden als auch für Unternehmen die Ent&shy;wicklung von Programmen, Web Apps und viel mehr an."
    />
    <OfferCard
      title="Automati&shy;sie&shy;rung"
      icon="i-lucide-cog"
      description="Wir machen Ihr Unter&shy;nehmen produktiver, indem wir bislang manuelle Prozesse mit maßge&shy;schnei&shy;derten Software&shy;lösungen auto&shy;mati&shy;sieren."
    />
    <OfferCard
      title="3D-Druck"
      icon="i-lucide-printer"
      description="Mit unserem 3D-Druck-Service erwecken wir deine Ideen zum Leben. Wir übernehmen alles von der Gestaltung bis zum Endprodukt."
    />
  </section>
</template>

<style scoped>
h2::after {
  content: "";
  display: block;
  width: 4rem;
  height: 2px;
  background-color: var(--color-maya-blue);
  margin: 1rem auto;
}
</style>
