import tailwindcss from "@tailwindcss/vite";

export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },

  future: {
    compatibilityVersion: 4,
  },

  css: ["~/assets/css/main.css"],

  vite: {
    plugins: [tailwindcss()],
    server: {
      proxy: {
        "/api": {
          target: "http://localhost:8080",
          changeOrigin: true,
        },
        "^/article/[^/]+/(?!read$)[^/]+$": {
          target: "http://localhost:8080",
          changeOrigin: true,
        },
      },
    },
  },

  modules: ["@nuxt/fonts", "@nuxtjs/color-mode", "@nuxt/icon"],

  ssr: false,
});
