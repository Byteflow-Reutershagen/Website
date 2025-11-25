<script lang="ts" setup></script>

<template>
  <section id="team" class="flex flex-col items-center text-center my-12">
    <h2 class="text-2xl font-semibold mb-4">Unser Team</h2>
    <img src="/images/team.jpeg" alt="Das Team von Byteflow" />
    <p>
      Wir sind Byteflow Reutershagen, die Schülerfirma des Gymnasiums
      Reutershagen aus Rostock.
    </p>
    <p>
      Sie wurde im Juni 2024 von 6 Schülerinnen und Schülern gegründet, und
      wächst seitdem ständig. Heute arbeiten 11 Schülerinnen und Schüler
      gemeinsam mit unseren zahlreichen Kunden an verschiedensten spannenden
      Projekten.
    </p>
    <p>
      Seit jeher ist die Softwareentwicklung unsere große Stärke, doch durch
      neue Mitglieder kamen neue Komptenzen in unsere Firma, sodass unsere 3D-
      Drucker aus unserem Angebot mittlerweile nicht mehr wegzudenken sind.
    </p>
    <p>
      Seit diesem Jahr wollen wir auch unser Angebot in Richtung des
      Videoschnitts mit neuen, professionellen Mitglieder erweitern.
    </p>
    <div class="member-div">
      <img
        class="member-pic"
        src="/images/people/placeholder.png"
        alt="person"
      />
      <h2 class="member-name">Emil Walthemath - Vorstand</h2>
      <p class="member-description">
        Kümmert sich um die Vermarktung und schneidet Videos.
      </p>
      <LinkButton
        class="member-email"
        href="mailto:emil.walthemath@byteflow-reutershagen.de"
        icon="lucide:mail"
        subtle
        >emil.walthemath@byteflow-reutershagen.de</LinkButton
      >
    </div>
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
.member-div {
  position: relative;
  display: grid;
  grid-template-areas:
    "Pic  name"
    "Pic  description"
    "Pic  email";
  align-items: center;
  gap: 1rem;
  padding: 1rem;
  border-radius: 12px;
  background-color: #aaa1;
}
.member-pic {
  grid-area: Pic;
  border-radius: 8px;
  height: 200px;
  margin-top: 0;
}
.member-name {
  grid-area: name;
  font-weight: bold;
  font-size: 1.4rem;
}
.member-description {
  grid-area: description;
}
.member-email {
  grid-area: email;
}
</style>
