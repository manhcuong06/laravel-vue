<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ header }}</div>

          <div class="card-body">
            {{ body }}
          </div>

          <div class="card-body">
            <input v-model="body" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      header: 'v-model example',
      body: 'My Body',
    };
  },
  mounted() {
    this.printConsole('Example Component mounted.');
  },
  methods: {
    printConsole(text) {
      console.log(text);
    },
  },
};
</script>
