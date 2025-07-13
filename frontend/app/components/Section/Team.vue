<script lang="ts" setup></script>

<template>
  <section class="flex flex-col items-center text-center my-12">
    <h2 class="text-2xl font-semibold mb-4">Wir sind Byteflow Reutershagen</h2>
    <p>
      Wir sind eine Schülergenossenschaft am Gymnasium Reutershagen in Rostock.
      Gemeinsam gestalten wir Projekte, lernen voneinander und entwickeln
      Techniklösungen, die zeigen, was mit Engagement und Teamgeist im
      Schulalltag möglich ist.
    </p>
    <p>
      <b>Byteflow Reutershagen</b> wurde am 10. Juni 2024 von sechs
      Schüler:innen als Softwarefirma gegründet. Später ist die
      3D-Druck-Abteilung hinzugekommen, die zuerst relativ inaktiv war, dann
      aber stark an Bedeutung gewonnen hat und nun nicht mehr aus der
      Schülerfirma wegzudenken ist.
    </p>
    <p>
      Um eine Zukunft für das Projekt zu sichern, fanden sich elf weitere
      Schüler:innen aus verschiedenen Jahrgängen, die motiviert an der
      Schülerfirma mitarbeiten wollten. Als die Gründungsmitglieder im Sommer
      2025 ihr Abitur abgelegt und die Schule verlassen haben, übergaben sie
      Byteflow an ein motiviertes neues Team.
    </p>
    <img src="/images/team.jpeg" alt="Das Team von Byteflow" />
  </section>
</template>

<style scoped>
p {
  margin-bottom: 1rem;
  max-width: calc(max(80%, 30rem));
  text-wrap: pretty;
}

img {
  width: 100%;
  max-width: 50rem;
  margin-top: 2rem;
  border-radius: 1rem;
  box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
}

h2::after {
  content: "";
  display: block;
  width: 2rem;
  height: 2px;
  background-color: var(--color-maya-blue);
  margin: 0.5rem auto;
}
</style>
