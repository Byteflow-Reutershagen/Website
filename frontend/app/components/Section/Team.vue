<script lang="ts" setup></script>

<template>
  <section class="flex flex-col items-center text-center my-12">
    <h2 class="text-2xl font-semibold mb-4">Wir sind Byteflow Reutershagen</h2>
    <p>
      Wir sind eine Schülergenossenschaft am Gymnasium Reutershagen in Rostock,
      die es sich zur Aufgabe gemacht hat, Firmen bei der Modernisierung zu
      helfen und qualitative Software für alle zugänglich zu machen.
    </p>
    <p>
      <b>Byteflow Reutershagen</b> wurde am 10. Juni 2024 mit Fokus auf
      Softwareentwicklung gegründet und obwohl die 3D-Druck-Abteilung erst
      relativ inaktiv war, hat sie stark an Bedeutung gewonnen und ist nun ein
      Bestandteil unseres Unternehmens, der nicht wegzudenken ist.
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
