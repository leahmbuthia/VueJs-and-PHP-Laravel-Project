<template>
    <div class="addItem">
        <input type="button" ></input>
      <!-- Form for adding items -->
      <form>
        <!-- Your form elements go here -->
        <input type="text" placeholder="Add a new item">
        <button type="submit">Add</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    name: 'AddItemForm',
    // Component logic here
  }
  </script>
  
  <style scoped>
  /* Styles for AddItemForm */
  form {
    display: flex;
    flex-direction: column;
  }
  </style>
  