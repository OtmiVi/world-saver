<template>
  <div class="mt-2">
    <form @submit.prevent="submitForm">
      <div v-if="validationError" class="alert alert-danger mt-3">
        {{ validationError }}
      </div>
      <div class="form-group">
        <label for="word">Word:</label>
        <input v-model="word" type="text" class="form-control" id="word" name="word" placeholder="Enter the word">
      </div>
      <div class="form-group">
        <label for="translate">Translate:</label>
        <input v-model="translation" type="text" class="form-control" id="translate" name="translate" placeholder="Enter the translation">
      </div>
      <button type="submit" class="btn btn-primary m-1">Submit</button>
    </form>

  </div>
</template>

<script>
export default {
  name: 'WordForm',

  data() {
    return {
      word: '',
      translation: '',
      validationError: ''
    };
  },
  methods: {
    submitForm() {
      if (this.word === '' || this.translation === '') {
        this.validationError = 'Both fields are required.';
      } else if (this.word === this.translation) {
        this.validationError = 'Word and Translation cannot be the same.';
      } else {
        this.sendDataToAPI();
      }
    },
    async sendDataToAPI() {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/words', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            word: this.word,
            translation: this.translation,
          }),
        });

        if (response.ok) {
          console.log('Data sent to API successfully.');
          this.word = '';
          this.translation = '';
          this.validationError = '';
        } else {
          this.validationError = 'Error sending data to the API.';
        }
      } catch (error) {
        this.validationError = 'An error occurred while sending data.';
      }
    }
  }
};
</script>

<style scoped>
</style>
