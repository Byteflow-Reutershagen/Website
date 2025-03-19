<template>
  <div class="flex justify-center items-center min-h-screen">
    <div id="box">
      <h1 class="text-3xl font-bold mb-4">Impressum</h1>
      <h2>Schülergenossenschaft Byteflow Reutershagen</h2>
      <p>
        Gymnasium Reutershagen<br />Mathias-Thesen-Straße 17<br />18069 Rostock
      </p>
      <h2>Vertreten durch:</h2>
      <p>Peter Schmedemann<br />E-Mail: peter.schmedemann@bilse.de</p>
      <LinkButton href="/" class="mt-4">Zur Startseite</LinkButton>
    </div>
  </div>
</template>

<style scoped>
#box {
  background-color: #aaa2;
  padding: 1rem;
  border-radius: 1rem;
}

h2 {
  font-size: var(--text-lg);
  font-weight: bold;
  margin-top: 0.75rem;
}
</style>
