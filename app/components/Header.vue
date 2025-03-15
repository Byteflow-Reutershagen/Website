<script lang="ts" setup>
const colorMode = useColorMode();
const modes = ["system", "dark", "light"];
const icons = ["moon", "sun", "monitor"];

function getModeIndex(mode: string) {
  return modes.indexOf(mode);
}

function cycleTheme() {
  colorMode.preference =
    modes[(getModeIndex(colorMode.preference) + 1) % modes.length]!;
}
</script>

<template>
  <header class="flex items-center justify-between p-4">
    <div class="flex items-center gap-4">
      <ColorScheme>
        <img
          src="/logo-light.svg"
          alt="Logo"
          class="size-12"
          :style="{ opacity: +($colorMode.value === 'light') }"
        />
        <img
          src="/logo-dark.svg"
          alt="Logo"
          class="size-12 absolute"
          :style="{ opacity: +($colorMode.value === 'dark') }"
        />
      </ColorScheme>
      <h1 class="text-xl font-bold">Byteflow Reutershagen</h1>
    </div>
    <button
      id="toggle-theme"
      @click="cycleTheme"
      class="rounded-md hover:bg-gray-400/10 p-1.5 aspect-square"
    >
      <Icon
        :name="'i-lucide-' + icons[getModeIndex(colorMode.preference)]"
        size="20"
      />
    </button>
  </header>
</template>

<style scoped>
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

img {
  transition: opacity var(--dark-mode-transition-duration);
}

#toggle-theme {
  transition: background-color 0.2s;
}
</style>
