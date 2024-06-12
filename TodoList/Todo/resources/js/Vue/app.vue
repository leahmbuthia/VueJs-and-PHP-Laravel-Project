<template>
    <div class="todoListContainer">
      <div class="heading">
        <h2 id="title">Todo List</h2>
        <add-item-form />
      </div>
      <list-view />
      <h3>Hello world</h3>
      hello
    </div>
  </template>
  
  <script>
  import AddItemForm from './AddItemForm.vue';
  import ListView from './ListView.vue';
  
  export default {
    name: 'App',
    components: {
      AddItemForm,
      ListView
    }
  }
  </script>
  
  <style scoped>
  .todoListContainer {
    width: 350px;
    margin: auto;
  }
  .heading {
    background: #e6e6e6;
    padding: 10px;
  }
  #title {
    text-align: center;
  }
  </style>
  