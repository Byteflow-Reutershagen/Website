<script lang="ts" setup></script>

<template>
  <header class="flex items-center justify-between p-4">
    <div class="flex items-center gap-4">
      <ColorScheme>
        <img
          :src="`/logo-${$colorMode.value}.svg`"
          alt="Logo"
          class="size-12"
        />
      </ColorScheme>
      <h1 class="text-xl font-bold">Byteflow Reutershagen</h1>
    </div>
    <button
      id="toggle-theme"
      @click="
        $colorMode.preference =
          $colorMode.preference === 'light' ? 'dark' : 'light'
      "
      class="rounded-md hover:bg-gray-400/10 p-1.5 aspect-square"
    >
      <Icon
        :name="$colorMode.value === 'light' ? 'i-lucide-moon' : 'i-lucide-sun'"
        size="20"
      />
    </button>
  </header>
</template>

<style>
header {
  position: sticky;
  top: 0;
  z-index: 100;
  background-color: #151515dd;
  backdrop-filter: blur(10px);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}

.light-mode header {
  background-color: #eeed;
}

#toggle-theme {
  transition: background-color 0.2s;
}
</style>
