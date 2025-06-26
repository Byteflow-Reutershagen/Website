<script lang="ts" setup></script>

<template>
  <h2 class="text-3xl font-semibold text-center mb-8">Unser Angebot</h2>
  <section class="grid md:grid-cols-3 gap-4 px-6 mx-auto max-w-7xl">
    <OfferCard
      title="Software"
      icon="i-lucide-code"
      description="Wir bieten für sowohl Privatkunden als auch für Unternehmen die Entwicklung von Webseiten, Internetanwendungen und viel mehr an."
    />
    <OfferCard
      title="Videoschnitt"
      icon="i-lucide-clapperboard"
      description="Unser professionelles Cutting-Team setzt Ihre Wünsche in die Realität um. Unser Angebot reicht von Intros über kurze Werbeclips bis zur Bearbeitung langer Vorlesungen."
    />
    <OfferCard
      title="3D-Druck"
      icon="i-lucide-printer"
      description="Mit unserem 3D-Druck-Service erwecken wir Ihre Ideen zum Leben. Wir übernehmen alles von der Gestaltung bis zum Endprodukt."
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
