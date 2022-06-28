const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    trashAssetsBeforeRuns: true,
    experimentalSessionAndOrigin: true,
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
