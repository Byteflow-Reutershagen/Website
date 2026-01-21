<script lang="ts" setup>
const props = defineProps<{
  name: string;
  image: string;
  description: string;
  email: string;
}>();
</script>

<template>
    <div class="member-div">
        <img
            class="member-pic"
            :src="props.image"
            :alt="props.name "
        />
        <h2 class="member-name">{{ props.name }}</h2>
        <p class="member-description">
            {{ props.description }}
        </p>
        <LinkButton
            class="member-email"
            :href="'mailto:' + props.email"
            icon="lucide:mail"
            subtle
        >
        {{ props.email }}
        </LinkButton>
    </div>
</template>

<style scoped>
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
    margin-top: 1rem;
    margin-bottom: 1rem;
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