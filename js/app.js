const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'To Do List',
        todos : [],
        newTodo : '',
        
      }
    },
    methods: {
      fetchData() {
        axios.get('js/server.php').then(res => {
            this.todos = res.data.results


        })
      },
      storeTodo() {
        const data = {
          todo: this.newTodo,
        }
  
        axios
          .post('js/server.php', data, {
            headers: {
              'Content-Type': 'multipart/form-data',
            },
          })
          .then((res) => {
            this.todos = res.data.results;
            this.newTodo= '';
          })
      },
    },
    created() {
      this.fetchData();
    }
  }).mount('#app')